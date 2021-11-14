<?PHP

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gradesheet_bunch_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

        
    
    function get_students($data)
    {
		if($data['course_id']=='comm'){
		$sql = "SELECT a.* FROM final_semwise_marks_foil_freezed a
WHERE a.session_yr=? AND a.`session`='Winter'
AND a.dept=? AND a.course=? AND a.branch=?
AND a.semester=? group by a.admn_no order by a.admn_no";
         
     $query = $this->db->query($sql, array($data['session_year'],$data['dept_id'],$data['course_id'],$data['sectionlist'],$data['sem']));

		
		
		}
		else{
			$sql = "SELECT a.* FROM final_semwise_marks_foil_freezed a
					WHERE a.session_yr=? AND a.`session`='Winter' 
					AND a.dept=? AND a.course=? AND a.branch=?
					AND a.semester=? group by a.admn_no order by a.admn_no";
         
     $query = $this->db->query($sql, array($data['session_year'],$data['dept_id'],$data['course_id'],$data['branch_id'],$data['sem']));

			
		}
			
		
          
        //echo $this->db->last_query(); die();
        if ($this->db->affected_rows() >= 0) {
            return $query->result();
        } else {
            return false;
        }
    }
	//Provisional
	function get_students_provisional($data)
    {
	
		
			$sql = "SELECT a.* FROM final_semwise_marks_foil_freezed a
					WHERE a.session_yr=? AND a.`session`='Winter' 
					AND a.dept=? AND a.course=? AND a.branch=?
					AND a.semester=? and a.status='PASS' group by a.admn_no order by a.admn_no";
         
     $query = $this->db->query($sql, array($data['session_year'],$data['dept_id'],$data['course_id'],$data['branch_id'],$data['sem']));
  
        if ($this->db->affected_rows() >= 0) {
            return $query->result();
        } else {
            return false;
        }
    }
	function get_student_minor($syear,$dept_id,$branch_id,$sem){
		$sql = "SELECT a.* FROM final_semwise_marks_foil_freezed a
WHERE a.session_yr=? AND a.`session`='Winter'
AND a.dept=? AND a.course='MINOR' AND a.branch=?
AND a.semester=? AND a.`status`='PASS'";
         
     $query = $this->db->query($sql, array($syear,$dept_id,$branch_id,$sem));
  
        if ($this->db->affected_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
	}
    
    
    

}

?>