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
	   $this->form_validation->set_rules('bPlace','Birth Place', 'required');
	   $this->form_validation->set_rules('baptPriestName','Baptism Priest' ,'required');
	   $this->form_validation->set_rules('baptSponsorA','Baptism Sponsor A', 'required');
	   $this->form_validation->set_rules('baptSponsorB','Baptism Sponsor B', 'required');
	   $this->form_validation->set_rules('baptBookNum','Baptism Book Number', 'required');
	   $this->form_validation->set_rules('baptPageNum','Baptism Page Number', 'required');
	   $this->form_validation->set_rules('baptLineNum','Baptism Line Number', 'required');
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 echo '<script language="javascript">';
		 echo 'alert("All fields are Required")';
		 echo '</script>';
		 $this->load->view('baptism',$data);
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
			'bPlace' => $this->input->post('bPlace'),
			'baptCode' =>$this->baptism_model->assign_baptcode(),
			'baptMonth' => $this->input->post('baptMonth'),
			'baptDay' => $this->input->post('baptDay'),
			'baptYear' => $this->input->post('baptYear'),
			'bPriestName' => $this->input->post('baptPriestName'),
			'bParishCode' => $this->input->post('baptParishCode'),
			'bSpA' => $this->input->post('baptSponsorA'),
			'bSpB' => $this->input->post('baptSponsorB'),
			'bBookNum' => $this->input->post('baptBookNum'),
			'bPageNum' => $this->input->post('baptPageNum'),
			'bLineNum' => $this->input->post('baptLineNum'),
			'registered' => date('Y-m-d H:i:s')
			);
		$result = $this->baptism_model->form_insert($datum);
		if ($result)
		{
			echo '<script language="javascript">';
			echo 'alert("Success")';
			echo '</script>';
			redirect('/Baptism_controller', 'refresh');
		}
		
		else 
		{
			echo '<script language="javascript">';
			echo 'alert("Duplicate Entry")';
			echo '</script>';
			redirect('/Baptism_controller', 'refresh');
		}
		//Loading View
		
	   }

	 }
	
}
?>