<?php
class bdel_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function form_remove($data)
	{
	   $this->load->helper('date');
	   $this -> db -> where('baptCode',$data['baptCode']);
	   $this -> db ->delete('bapts');
	   
}
}
?>