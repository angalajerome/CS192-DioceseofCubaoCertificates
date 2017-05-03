<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CheckSearch_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('viewsome_model','',TRUE);
	 }

	 public function index()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	   $session_data = $this->session->userdata('logged_in');
       $data['username'] = $session_data['userName'];
	   $data['parishcode'] = $session_data['parishCode'];
	   $this->form_validation->set_rules('FirstName','First Name', 'required');
	   $this->form_validation->set_rules('LastName','Last Name', 'required');
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 echo '<script language="javascript">';
		 echo 'alert("All fields are Required")';
		 echo '</script>';
		 $this->load->view('search',$data);
	   }
	   else
	   {
		 //Go to private area
		 $datum = array(
			'firstName' => $this->input->post('FirstName'),
			'lastName' => $this->input->post('LastName'),
			'bDay' => $this->input->post('birthDay'),
			'bMonth' => $this->input->post('birthMonth'),
			'bYear' => $this->input->post('birthYear')
			);
		$resultBapts = $this->viewsome_model->searchBapts($datum);
		$resultConfs = $this->viewsome_model->searchConfs($datum);
		if ($resultBapts->num_rows() != 0 || $resultConfs->num_rows() != 0)
		{
			$data['resultBapts'] = $resultBapts;
			$data['resultConfs'] = $resultConfs;
			$this->load->view('searchresults',$data);
		}
		
		else 
		{
			echo '<script language="javascript">';
			echo 'alert("No Results")';
			echo '</script>';
			redirect('/Search_controller', 'refresh');
		}
		//Loading View
		
	   }

	 }
	
}
?>