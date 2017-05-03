<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CEdit_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('cedit_model','',TRUE);
	 }

	 public function index()
	 {
		 //Go to private area
		 $datum = array(
			'firstName' => $this->input->post('cfName'),
			'lastName' => $this->input->post('clName'),
			'middleName' => $this->input->post('cmName'),
			'suffix' => $this->input->post('csx'),
			'mother' => $this->input->post('mom'),
			'father' => $this->input->post('pop'),
			'bMonth' => $this->input->post('bmon'),
			'bDay' => $this->input->post('bday'),
			'bYear' => $this->input->post('byir'),
			'baptMonth' => $this->input->post('bptmon'),
			'baptDay' => $this->input->post('bptday'),
			'baptYear' => $this->input->post('bptyir'),
			'baptParishCode' => $this->input->post('bptpar'),
			'cBishopName' => $this->input->post('cBishopName'),
			'cParishCode' => $this->input->post('confParishCode'),
			'confCode' => $this->input->post('confCode'),
			'confMonth' => $this->input->post('confMonth'),
			'confDay' => $this->input->post('confDay'),
			'confYear' => $this->input->post('confYear'),
			'cSpA' => $this->input->post('cSpA'),
			'cSpB' => $this->input->post('cSpB'),
			'cBookNum' => $this->input->post('cBookNum'),
			'cPageNum' => $this->input->post('cPageNum'),
			'cLineNum' => $this->input->post('cLineNum'),
			'confAdmin' => $this->input->post('confAdmin'),
			'lastModified' => date('Y-m-d H:i:s')
			);
		$this->cedit_model->form_update($datum);

		echo '<script language="javascript">';
		echo 'alert("Confirmation Entry Modified")';
		echo '</script>';
		redirect('/Search_controller', 'refresh');

		//Loading View
		
	 }

	 
	
}
?>