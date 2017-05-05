<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class ViewRec_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('viewrec_model','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['userName'];
	 $data['parishcode'] = $session_data['parishCode'];
	 
	 $datum = array(
			'startMonth' => $this->input->post('startMonth'),
			'startYear' => $this->input->post('startYear'),
			'endMonth' => $this->input->post('endMonth'),
			'endYear' => $this->input->post('endYear'),
	);

	 $data['recBapts'] = $this->viewrec_model->getRecBapts($datum);
	 // $data['recBapts2'] = $this->viewrec_model->getRecBapts2($datum);
	 $date = new DateTime();
	 $date->setDate($datum['startYear'], $datum['startMonth'],0);
	  echo '<script language="javascript">';
		 echo 'alert("'.date_format($date,"Y/m").'")';
		 echo '</script>';
	 // if ($data['recBapts']->num_rows() == 0 && $data['recConfs']->num_rows() == 0)
	 // {
		 // echo '<script language="javascript">';
		 // echo 'alert("No Results")';
		 // echo '</script>';
		 // redirect('/Statistics_controller', 'refresh');
	 // }
	 // else
	 // {
		$this->load->view('recresults', $data); 
	 // }
     
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>