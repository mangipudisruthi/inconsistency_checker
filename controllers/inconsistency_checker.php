<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inconsistency_checker extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('inconsistency_checker_model');
    }

    public function index()	{
        $data= array(
            'session_year'=> $this->input->post('session_year'),
            'session'=> $this->input->post('session'),
            'inconsistency_type'=> $this->input->post('inconsistency_type'),
        );

        $this->drawHeader();

        if(($data['session']=='NULL' || $data['session_year']=='NULL' || 
        $data['inconsistency_type']=='NULL') && isset($_POST['submit'])) {
            $data['err_code']=1;
            $this->load->view('inconsistency_checker_form',$data);	
        }

        else if(isset($_POST['submit']) && $data['inconsistency_type']=='duplicate_sem_registrations') {
			$data['traffic1'] = $this->inconsistency_checker_model->duplicate_sem_registrations($data);
			$data['err_code']=0;
			$this->load->view('duplicate_sem_registrations',$data);	
		}

        else if(isset($_POST['submit']) && $data['inconsistency_type']=='duplicate_course_registrations') {
            $data['traffic2'] = $this->inconsistency_checker_model->duplicate_course_registrations($data);
			$data['err_code']=0;
			$this->load->view('duplicate_course_registrations',$data);
        }

        else if(isset($_POST['submit']) && $data['inconsistency_type']=='wrong_course_mappings') {
            $data['traffic3'] = $this->inconsistency_checker_model->wrong_course_mappings($data);
			$data['err_code']=0;
			$this->load->view('wrong_course_mappings',$data);
        }

        else if(isset($_POST['submit']) && $data['inconsistency_type']=='pending_result_declarations') {
            $data['traffic4'] = $this->inconsistency_checker_model->pending_result_declarations($data);
			$data['err_code']=0;
			$this->load->view('pending_result_declarations',$data);
        }

        else {
            $data['err_code']=0;
            $this->load->view('inconsistency_checker_form',$data);
        }
        $this->drawFooter();
    }
}