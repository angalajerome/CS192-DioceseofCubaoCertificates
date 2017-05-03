<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CDel_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('cdel_model','',TRUE);
	 }

	 public function index()
	 {
		 //Go to private area
		 $datum = array(
		 'confCode' =>$this->input->post('confCode'),
			);
		$this->cdel_model->form_remove($datum);

		echo '<script language="javascript">';
		echo 'alert("Confirmation Entry Removed")';
		echo '</script>';
		redirect('/Search_controller', 'refresh');

		//Loading View
		
	 }

	 
	
}
?>