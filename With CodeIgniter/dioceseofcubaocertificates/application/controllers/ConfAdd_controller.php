<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConfAdd_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('confirmation_model','',TRUE);
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
	   $this->form_validation->set_rules('cBishopName','Confirmation Bishop' ,'required');
	   $this->form_validation->set_rules('confAdmin','Confirmation Admin' ,'required');
	   $this->form_validation->set_rules('cSpA','Confirmation Sponsor A', 'required');
	   $this->form_validation->set_rules('cSpB','Confirmation Sponsor B', 'required');
	   $this->form_validation->set_rules('cBookNum','Confirmation Book Number', 'required');
	   $this->form_validation->set_rules('cPageNum','Confirmation Page Number', 'required');
	   $this->form_validation->set_rules('cLineNum','Confirmation Line Number', 'required');
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 echo '<script language="javascript">';
		 echo 'alert("All fields are Required")';
		 echo '</script>';
		 $this->load->view('confirmation',$data);
	   }
	   else
	   {
		 //Go to private area
		 $datum = array(
			'firstName' => $this->input->post('fName'),
			'lastName' => $this->input->post('lName'),
			'middleName' => $this->input->post('mName'),
			'suffix' => $this->input->post('Suffix'),
			'mother' => $this->input->post('MotherName'),
			'father' => $this->input->post('FatherName'),
			'bMonth' => $this->input->post('birthMonth'),
			'bDay' => $this->input->post('birthDay'),
			'bMonth' => $this->input->post('birthMonth'),
			'bYear' => $this->input->post('birthYear'),
			'baptMonth' => $this->input->post('baptMonth'),
			'baptDay' => $this->input->post('baptDay'),
			'baptYear' => $this->input->post('baptYear'),
			'baptParishCode' => $this->input->post('baptParishCode'),
			'cBishopName' => $this->input->post('cBishopName'),
			'cParishCode' => $this->input->post('confParishCode'),
			'confCode' => $this->confirmation_model->assign_confcode(),
			'confMonth' => $this->input->post('confMonth'),
			'confDay' => $this->input->post('confDay'),
			'confYear' => $this->input->post('confYear'),
			'cSpA' => $this->input->post('cSpA'),
			'cSpB' => $this->input->post('cSpB'),
			'cBookNum' => $this->input->post('cBookNum'),
			'cPageNum' => $this->input->post('cPageNum'),
			'cLineNum' => $this->input->post('cLineNum'),
			'confAdmin' => $this->input->post('confAdmin'),
			'registered' => date('Y-m-d H:i:s')
			);
		$result = $this->confirmation_model->form_insert($datum);
		if ($result)
		{
			echo '<script language="javascript">';
			echo 'alert("Success")';
			echo '</script>';
			redirect('/Confirmation_controller', 'refresh');
		}
		
		else 
		{
			echo '<script language="javascript">';
			echo 'alert("Duplicate Entry")';
			echo '</script>';
			redirect('/Confirmation_controller', 'refresh');
		}
		//Loading View
		
	   }

	 }
	
}
?>