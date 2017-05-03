<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BEdit_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('bedit_model','',TRUE);
	 }

	 public function index()
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
			'baptCode' =>$this->input->post('baptCode'),
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
			'lastModified' => date('Y-m-d H:i:s')
			);
		$this->bedit_model->form_update($datum);

		echo '<script language="javascript">';
		echo 'alert("Baptism Entry Modified")';
		echo '</script>';
		redirect('/Search_controller', 'refresh');

		//Loading View
		
	 }

	 
	
}
?>