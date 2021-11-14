<?php

class Inconsistency_checker_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

  public function duplicate_sem_registrations($data) {
    $sql = "select admn_no, course_id, branch_id, semester, count(*) as c1 from 
    reg_regular_form where hod_status='1' and acad_status='1' and session_year= ? and session= ? 
    GROUP BY admn_no, session, session_year having c1>1";

    $query = $this->db->query($sql, array($data['session_year'],$data['session']));

    return $query->result_array();
  }

  public function duplicate_course_registrations($data) {
    $sql= "select admn_no, course, branch, subject_code, subject_name, count(*) as c2 from pre_stu_course 
    where remark2='3' and session_year = ? and session = ? GROUP BY admn_no, subject_code, remark2, 
    session_year, session having c2>1";

    $query = $this->db->query($sql, array($data['session_year'],$data['session']));

    return $query->result_array();
  }

  public function wrong_course_mappings($data) {
    $sql = 'select oc.admn_no as admn_no, rr.semester as semester, oc.subject_name as subject_name, 
    oc.subject_code as subject_code, oc.session_year as session_year, oc.session as session, 
    oc.course as course, oc.sub_offered_id as wrong_id, oo.id as correct_id from (select * 
    from reg_regular_form where form_id between 245840 and 275533) as rr join 
    (select * from pre_stu_course) as oc  on  rr.form_id=oc.form_id join (select * from 
    old_subject_offered) as oo on oc.session = oo.session and oc.session_year = oo.session_year and 
    oc.branch=oo.branch_id and oc.course=oo.course_id and oc.subject_code = oo.sub_code where 
    rr.semester=oo.semester and replace(oc.sub_offered_id,"o","") <> oo.id and oc.sub_offered_id 
    NOT LIKE "c%" LIMIT 50';

    $query = $this->db->query($sql);
    $array= $query->result_array();

    $new_array = array();

		foreach($query->result_array() as $row) {
			if ($row['session_year'] == $data['session_year'] && $row['session'] == $data['session']) {
				array_push($new_array, $row);
			}
		}

		return $new_array;
  }

  public function pending_result_declarations($data) {
    $sql1 = 'select csc.admn_no, freezed.semester as semester, freezed.course as course, freezed.branch 
    as branch from cbcs_stu_course as csc join final_semwise_marks_foil_freezed as freezed on 
    csc.admn_no=freezed.admn_no and csc.session_year=freezed.session_yr and csc.session=freezed.session 
    join final_semwise_marks_foil_desc_freezed as des on freezed.id=des.foil_id and 
    csc.subject_code=des.sub_code where csc.session_year= ? and csc.session= ? and 
    des.grade is not null and freezed.published_on is null group by csc.admn_no, freezed.semester';

    $sql2 = 'select csc.admn_no, freezed.semester as semester, freezed.course as course, freezed.branch 
    as branch from old_stu_course as csc join final_semwise_marks_foil_freezed as freezed on 
    csc.admn_no=freezed.admn_no and csc.session_year=freezed.session_yr and csc.session=freezed.session 
    join final_semwise_marks_foil_desc_freezed as des on freezed.id=des.foil_id and 
    csc.subject_code=des.sub_code where csc.session_year= ? and csc.session= ? and 
    des.grade is not null and freezed.published_on is null group by csc.admn_no, freezed.semester';

    $query1 = $this->db->query($sql1, array($data['session_year'],$data['session']));
    $query2 = $this->db->query($sql2, array($data['session_year'],$data['session']));

    return array_merge($query1->result_array(), $query2->result_array());
  }
}