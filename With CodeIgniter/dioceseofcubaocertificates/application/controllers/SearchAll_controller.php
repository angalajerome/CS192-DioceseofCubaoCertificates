<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SearchAll_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('viewall_model','',TRUE);
	 }

	 public function index()
	 {
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['userName'];
	    $data['parishcode'] = $session_data['parishCode'];
	    $resultBapts = $this->viewall_model->allBapts();
		$resultConfs = $this->viewall_model->allConfs();
		$data['resultBapts'] = $resultBapts;
		$data['resultConfs'] = $resultConfs;
		$this->load->view('searchresults',$data);

	 }
	
}
?>