<?php
/*
 * Author : Jay Doshi
 */
class No_dues_menu_model extends CI_Model{

    function __construct()
    {
        // Calling the Model parent constructor
        parent::__construct();
    }

    function getMenu(){

        $menu = array();

        $menu['stu'] = array();
        $menu['stu']['No Dues']['No Dues'] = site_url('no_dues/no_dues_student_init/init_student');
        $menu['stu']['No Dues']['Request No Dues'] = site_url('no_dues/no_dues_student_init/request_no_dues');
        //$menu['stu']['No Dues']['Print No Dues Form'] = site_url('no_dues/no_dues_student_init/print_dues');
        



    //     $menu['admin'] = array();
    //     $menu['admin']['No Dues'] = array();
    //     //$menu['admin']['No Dues']['No Dues for Dropouts']=array();
    //     $menu['admin']['No Dues']['Normal No Dues']=array();
    //    // $menu['admin']['No Dues']['Normal No Dues']['Edit Departments'] = site_url('no_dues/no_dues_admin_edit/no_dues_dept_list');
    //     $menu['admin']['No Dues']['Normal No Dues']['Start No Dues']=array();
    //     $menu['admin']['No Dues']['Normal No Dues']['Start No Dues']['Start for admin'] = site_url('no_dues/no_dues_admin_edit/start_dues_admin');
    //     $menu['admin']['No Dues']['Normal No Dues']['Start No Dues']['Start for student'] = site_url('no_dues/no_dues_admin_edit/start_dues_student');
    //     $menu['admin']['No Dues']['Normal No Dues']['Stop No Dues']=array();
    //     $menu['admin']['No Dues']['Normal No Dues']['Stop No Dues']['Stop for admin'] = site_url("no_dues/no_dues_admin_edit/stop_dues_admin");
    //     $menu['admin']['No Dues']['Normal No Dues']['Stop No Dues']['Stop for student'] = site_url("no_dues/no_dues_admin_edit/stop_dues_student");
    //     $menu['admin']['No Dues']['Normal No Dues']['Edit No Dues Time']=array();
    //     $menu['admin']['No Dues']['Normal No Dues']['Edit No Dues Time']['Edit for admin'] = site_url("no_dues/no_dues_admin_edit/edit_no_dues_start_admin");
    //     $menu['admin']['No Dues']['Normal No Dues']['Edit No Dues Time']['Edit for student'] = site_url("no_dues/no_dues_admin_edit/edit_no_dues_start_student");
    //     $menu['admin']['No Dues']['Normal No Dues']['Verify receipt'] =site_url('no_dues/no_dues_admin_edit/verify_receipt_number');
    //     $menu['admin']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');

    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Add Dropouts'] = site_url('no_dues/no_dues_admin_edit/add_dropouts');
    //    // $menu['admin']['No Dues']['No Dues for Dropouts']['Edit Departments'] = site_url('no_dues/no_dues_admin_edit/no_dues_dept_list');
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Start No Dues']=array();
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Start No Dues']['Start for admin'] = site_url('no_dues/no_dues_admin_edit/start_dues_admin_2');
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Start No Dues']['Start for student'] = site_url('no_dues/no_dues_admin_edit/start_dues_student_2');
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Stop No Dues']=array();
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Stop No Dues']['Stop for admin'] = site_url("no_dues/no_dues_admin_edit/stop_dues_admin_2");
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Stop No Dues']['Stop for student'] = site_url("no_dues/no_dues_admin_edit/stop_dues_student_2");
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Edit No Dues Time']=array();
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Edit No Dues Time']['Edit for admin'] = site_url("no_dues/no_dues_admin_edit/edit_no_dues_start_admin_2");
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Edit No Dues Time']['Edit for student'] = site_url("no_dues/no_dues_admin_edit/edit_no_dues_start_student_2");
    //     $menu['admin']['No Dues']['No Dues for Dropouts']['Verify receipt'] =site_url('no_dues/no_dues_admin_edit/verify_receipt_number_2');
         






       $menu['hod'] = array();
       $menu['hod']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['hod']['No Dues']['No Dues']=array();
       $menu['hod']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['hod']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['hod']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['hod']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['hod']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
	   $menu['hod']['No Dues']['No Dues']['Dues Clearance']= site_url('no_dues/dues_clearance_by_no_dues_dept');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['hod']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['hod']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');

    //    $menu['hod']['No Dues']['No Dues for Dropouts']['No dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry_2');
    //    $menu['hod']['No Dues']['No Dues for Dropouts']['Edit No Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_2');
    //    $menu['hod']['No Dues']['No Dues for Dropouts']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete_2');
    //    $menu['hod']['No Dues']['No Dues for Dropouts']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_2');
    //    $menu['hod']['No Dues']['No Dues for Dropouts']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list_2');   
    
    
       $menu['pse'] = array();
       $menu['pse']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['pse']['No Dues']['No Dues']=array();
       $menu['pse']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['pse']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['pse']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['pse']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['pse']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['pse']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['pse']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');


       $menu['ncc'] = array();
       $menu['ncc']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['ncc']['No Dues']['No Dues']=array();
       $menu['ncc']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['ncc']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['ncc']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['ncc']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['ncc']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['ncc']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['ncc']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');


       $menu['sp_sec'] = array();
       $menu['sp_sec']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['sp_sec']['No Dues']['No Dues']=array();
       $menu['sp_sec']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['sp_sec']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['sp_sec']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['sp_sec']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['sp_sec']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['sp_sec']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['sp_sec']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');


       $menu['pic_ws'] = array();
       $menu['pic_ws']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['pic_ws']['No Dues']['No Dues']=array();
       $menu['pic_ws']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['pic_ws']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['pic_ws']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['pic_ws']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['pic_ws']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['pic_ws']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['pic_ws']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');


       $menu['asst_lib'] = array();
       $menu['asst_lib']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['asst_lib']['No Dues']['No Dues']=array();
       $menu['asst_lib']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['asst_lib']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['asst_lib']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['asst_lib']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['asst_lib']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       $menu['asst_lib']['No Dues']['No Dues']['Dues Clearance']= site_url('no_dues/dues_clearance_by_no_dues_dept');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['asst_lib']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['asst_lib']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');


       $menu['sr_tec_lib'] = array();
       $menu['sr_tec_lib']['No Dues'] = array();
       $menu['sr_tec_lib']['No Dues']['No Dues']=array();
       $menu['sr_tec_lib']['No Dues']['No Dues']['Dues Clearance']= site_url('no_dues/dues_clearance_by_no_dues_dept');



       $menu['dsw'] = array();
       $menu['dsw']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['dsw']['No Dues']['No Dues']=array();
       $menu['dsw']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['dsw']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['dsw']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['dsw']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['dsw']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['dsw']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['dsw']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');


       $menu['acad_dr'] = array();
       $menu['acad_dr']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['acad_dr']['No Dues']['No Dues']=array();
       $menu['acad_dr']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['acad_dr']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['acad_dr']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['acad_dr']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['acad_dr']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['acad_dr']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['acad_dr']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');
	   
	   
	   
	   $menu['dsw-office'] = array();
       $menu['dsw-office']['No Dues'] = array();
       //$menu['hod']['No Dues']['No Dues for Dropouts']=array();
       $menu['dsw-office']['No Dues']['No Dues']=array();
       $menu['dsw-office']['No Dues']['No Dues']['Dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
       $menu['dsw-office']['No Dues']['No Dues']['Bulk Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       $menu['dsw-office']['No Dues']['No Dues']['Bulk Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_bulk_admin/bulk_upload_sample_csv_no_dues');
       $menu['dsw-office']['No Dues']['No Dues']['Edit-Delete Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_delete');
       $menu['dsw-office']['No Dues']['No Dues']['Approve/Reject Dues']= site_url('no_dues/no_dues_bulk_admin/get_all_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
       //$menu['hod']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
       //$menu['hod']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
       //$menu['hod']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Download CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_download_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk No Dues Entry']['Upload CSV'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_sample_csv_no_dues');
       //$menu['hod']['No Dues']['Normal No Dues']['Bulk Upload No Dues Entry'] = site_url('no_dues/no_dues_admin_edit/bulk_upload_no_dues_entry');
       $menu['dsw-office']['No Dues']['No Dues']['Report']['General'] = site_url('no_dues/no_dues_admin_edit/general_report');
       $menu['dsw-office']['No Dues']['No Dues']['Report']['Student-wise'] = site_url('no_dues/no_dues_admin_edit/student_wise_report');


        $menu['acad_dr'] = array();
        $menu['acad_dr']['No Dues Admin (Only Report)']['Report']['General'] = site_url('hs_reg/hostel_admin_portal/general_report');
        $menu['acad_dr']['No Dues Admin (Only Report)']['Report']['Hostel-wise'] = site_url('hs_reg/hostel_admin_portal/hostel_wise_report');
        $menu['acad_dr']['No Dues Admin (Only Report)']['Report']['Student-wise'] = site_url('hs_reg/hostel_admin_portal/student_wise_report');


        // $menu['deo'] = array();
 	    // $menu['deo']['No Dues'] = array();
        // $menu['deo']['No Dues']['No Dues for Dropouts']=array();
        // $menu['deo']['No Dues']['Normal No Dues']=array();
        // $menu['deo']['No Dues']['Normal No Dues']['Edit Departments'] = site_url('no_dues/no_dues_admin_edit/no_dues_dept_list');
        // $menu['deo']['No Dues']['Normal No Dues']['Edit No Dues Admins'] = site_url('no_dues/no_dues_admin_edit/no_dues_nda_list');
        // $menu['deo']['No Dues']['Normal No Dues']['No dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
        //  $menu['deo']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all');

        // $menu['deo']['No Dues']['No Dues for Dropouts']['Edit Departments'] = site_url('no_dues/no_dues_admin_edit/no_dues_dept_list');
        // $menu['deo']['No Dues']['No Dues for Dropouts']['Edit No Dues Admins'] = site_url('no_dues/no_dues_admin_edit/no_dues_nda_list');
        // $menu['deo']['No Dues']['No Dues for Dropouts']['No dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry_2');



    //    $menu['nda'] = array();
    //    $menu['nda']['No Dues'] = array();
    //    $menu['nda']['No Dues']['No Dues for Dropouts']=array();
    //    $menu['nda']['No Dues']['Normal No Dues']=array();
    //    $menu['nda']['No Dues']['Normal No Dues']['No dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry');
    //    $menu['nda']['No Dues']['Normal No Dues']['Edit No Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit');
    //    $menu['nda']['No Dues']['Normal No Dues']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete');
    //    $menu['nda']['No Dues']['Normal No Dues']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history');
    //    $menu['nda']['No Dues']['Normal No Dues']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list');
    //    $menu['nda']['No Dues']['Normal No Dues']['History All'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_view_all'); 

    //    $menu['nda']['No Dues']['No Dues for Dropouts']['No dues Entry'] = site_url('no_dues/no_dues_admin_edit/no_dues_entry_2');
    //    $menu['nda']['No Dues']['No Dues for Dropouts']['Edit No Dues']= site_url('no_dues/no_dues_admin_edit/no_dues_edit_2');
    //    $menu['nda']['No Dues']['No Dues for Dropouts']['Delete No Dues ']= site_url('no_dues/no_dues_admin_edit/no_dues_delete_2');
    //    $menu['nda']['No Dues']['No Dues for Dropouts']['history'] = site_url('no_dues/no_dues_admin_edit/no_dues_history_2');
    //    $menu['nda']['No Dues']['No Dues for Dropouts']['View Dues Status'] = site_url('no_dues/no_dues_admin_edit/no_dues_rejected_list_2');     


   
        return $menu;
    }
}

