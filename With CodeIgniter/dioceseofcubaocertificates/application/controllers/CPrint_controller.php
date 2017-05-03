<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CPrint_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('cprint_model','',TRUE);
	 }

	 public function index()
	 {
		 //Go to private area
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['userName'];
		 $data['parishcode'] = $session_data['parishCode'];
		 $confcode =$this->input->post('confCode');
		 $data['purpose'] =$this->input->post('printconfcertpurpose');
		$this->load->library('myfpdf');
		$data['infoConf'] = $this->cprint_model->getInfoConf($confcode);
		//Loading View
		if ($data['infoConf']->num_rows() == 0)
		{
			echo '<script language="javascript">';
			echo 'alert("im Empty")';
			echo '</script>';
		}
		$this->load->view('cprint',$data);
		
	 }

	 
	
}
?>