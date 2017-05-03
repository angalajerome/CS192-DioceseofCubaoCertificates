<?php
class bedit_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function form_update($data)
	{
	   $this->load->helper('date');
	   $this -> db -> where('baptCode',$data['baptCode']);
	   $this -> db -> update('bapts',$data);
	   
}
}
?>