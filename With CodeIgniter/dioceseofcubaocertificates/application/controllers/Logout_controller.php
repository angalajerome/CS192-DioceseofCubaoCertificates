<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Logout_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form'));
   session_destroy();
	$this->session->unset_userdata('logged_in');
   redirect('Login_controller', 'refresh');
 }
}