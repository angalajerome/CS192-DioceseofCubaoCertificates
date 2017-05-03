<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BPrint_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('bprint_model','',TRUE);
	 }

	 public function index()
	 {
		 //Go to private area
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['userName'];
		 $data['parishcode'] = $session_data['parishCode'];
		 $baptcode =$this->input->post('baptCode');
		 $data['purpose'] =$this->input->post('printbaptcertpurpose');
		$this->load->library('myfpdf');
		$data['infoBapt'] = $this->bprint_model->getInfoBapt($baptcode);
		//Loading View
		$this->load->view('bprint',$data);
		
	 }

	 
	
}
?>