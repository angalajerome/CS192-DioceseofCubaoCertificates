<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaptAdd_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('baptism_model','',TRUE);
	 }

	 public function index()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	   $session_data = $this->session->userdata('logged_in');
       $data['username'] = $session_data['userName'];
	   $this->form_validation->set_rules('fName','First Name', 'required');
	   $this->form_validation->set_rules('mName', 'Middle Name','required');
	   $this->form_validation->set_rules('lName','Last Name', 'required');
	   $this->form_validation->set_rules('MotherName','Mother Name' ,'required');
	   $this->form_validation->set_rules('FatherName','Father Name', 'required');
	   $this->form_validation->set_rules('baptPriestName','Baptism Priest' ,'required');
	   $this->form_validation->set_rules('baptSponsorA','Baptism Sponsor A', 'required');
	   $this->form_validation->set_rules('baptSponsorB','Baptism Sponsor B', 'required');
	   $this->form_validation->set_rules('baptBookNum','Baptism Book Number', 'required');
	   $this->form_validation->set_rules('baptPageNum','Baptism Page Number', 'required');
	   $this->form_validation->set_rules('baptLineNum','Baptism Line Number', 'required');
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 
		 $this->load->view('baptism',$data);
	   }
	   else
	   {
		 //Go to private area
		 $datum = array(
			'personFirstName' => $this->input->post('fName'),
			'personLastName' => $this->input->post('lName'),
			'personMiddleName' => $this->input->post('mName'),
			'personSuffix' => $this->input->post('Suffix')
			);
		 $this->baptism_model->form_insert($datum);
		$data['message'] = 'Data Inserted Successfully';
		//Loading View
		$this->load->view('baptism',$data);
	   }

	 }
	
}
?>