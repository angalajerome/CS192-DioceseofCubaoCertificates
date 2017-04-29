<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Statistics_controller extends CI_Controller 
{

 public function __construct()
 {
   parent::__construct();
   $this->load->model('statistics_model','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['userName'];
	 $data['parishcode'] = $session_data['parishCode'];
	 $data['baptsNum'] = $this->statistics_model->countBapts($session_data['parishCode']);
	 $data['confsNum'] = $this->statistics_model->countConfs($session_data['parishCode']);
	 $data['accessNum'] = $this->statistics_model->countAccess($session_data['parishCode']);
	 $data['usersNum'] = $this->statistics_model->countUsers();
	 $data['totalBaptsNum'] = $this->statistics_model->countTotalBapts();
	 $data['totalConfsNum'] = $this->statistics_model->countTotalConfs();
	 $data['BaptsVicariateHolyFamily'] = $this->statistics_model->countVicariateHolyFamilyBapts();
	 $data['ConfsVicariateHolyFamily'] = $this->statistics_model->countVicariateHolyFamilyConfs();
	 $data['BaptsVicariatePerpetualHelp'] = $this->statistics_model->countVicariatePerpetualHelpBapts();
	 $data['ConfsVicariatePerpetualHelp'] = $this->statistics_model->countVicariatePerpetualHelpConfs();
	 $data['BaptsVicariateStoNiño'] = $this->statistics_model->countVicariateStoNiñoBapts();
	 $data['ConfsVicariateStoNiño'] = $this->statistics_model->countVicariateStoNiñoConfs();
	 $data['BaptsVicariateSanPedro'] = $this->statistics_model->countVicariateSanPedroBapts();
	 $data['ConfsVicariateSanPedro'] = $this->statistics_model->countVicariateSanPedroConfs();
	 $data['BaptsVicariateSantaRita'] = $this->statistics_model->countVicariateSantaRitaBapts();
	 $data['ConfsVicariateSantaRita'] = $this->statistics_model->countVicariateSantaRitaConfs();
	 $data['BaptsVicariateStJoseph'] = $this->statistics_model->countVicariateStJosephBapts();
	 $data['ConfsVicariateStJoseph'] = $this->statistics_model->countVicariateStJosephConfs();
     $this->load->view('statistics', $data);
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>