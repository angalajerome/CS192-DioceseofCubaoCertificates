<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class ConfEdit_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('confedit_model','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['userName'];
	 $data['parishcode'] = $session_data['parishCode'];
	 
	 $datum = array(
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'bDay' => $this->input->post('bDay'),
			'bMonth' => $this->input->post('bMonth'),
			'bYear' => $this->input->post('bYear')
	);
	 $data['resultConfs'] = $this->confedit_model->getConfData($datum);
     $this->load->view('confedit', $data);
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>