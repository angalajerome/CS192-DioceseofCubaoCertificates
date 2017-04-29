<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserAdd_controller extends CI_Controller 
{

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('adduser_model','',TRUE);
	 }

	 public function index()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	   $session_data = $this->session->userdata('logged_in');
       $data['username'] = $session_data['userName'];
	   $this->form_validation->set_rules('NewUserName','New User Name', 'required');
	   $this->form_validation->set_rules('NewPassword', 'New Password','required');
	   $this->form_validation->set_rules('ConfirmPassword','Confirm Password', 'required|matches[NewPassword]');
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $this->load->view('adduser',$data);
	   }
	   else
	   {
		 //Go to private area
		 $datum = array(
			'userName' => $this->input->post('NewUserName'),
			'password' => md5($this->input->post('NewPassword')),
			'parishCode' => $this->input->post('NewParishCode'),
			'userCode' => $this->adduser_model->assign_usercode(),
			);
		$result = $this->adduser_model->form_insert($datum);
		if ($result)
		{
			echo '<script language="javascript">';
			echo 'alert("Success")';
			echo '</script>';
			redirect('/Adduser_controller', 'refresh');
		}
		
		else 
		{
			echo '<script language="javascript">';
			echo 'alert("Duplicate Entry")';
			echo '</script>';
			redirect('/Adduser_controller', 'refresh');
		}
		//Loading View
		
	   }

	 }
	
}
?>