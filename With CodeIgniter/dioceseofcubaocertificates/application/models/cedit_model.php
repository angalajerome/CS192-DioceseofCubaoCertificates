<?php
class cedit_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function form_update($data)
	{
	   $this->load->helper('date');
	   $this -> db -> where('confCode',$data['confCode']);
	   $this -> db -> update('confs',$data);
	   
}
}
?>