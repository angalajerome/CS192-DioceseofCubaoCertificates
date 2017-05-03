<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BDel_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('bdel_model','',TRUE);
	 }

	 public function index()
	 {
		 //Go to private area
		 $datum = array(
		 'baptCode' =>$this->input->post('baptCode'),
			);
		$this->bdel_model->form_remove($datum);

		echo '<script language="javascript">';
		echo 'alert("Baptism Entry Removed")';
		echo '</script>';
		redirect('/Search_controller', 'refresh');

		//Loading View
		
	 }

	 
	
}
?>