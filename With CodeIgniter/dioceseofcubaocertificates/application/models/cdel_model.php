<?php
class cdel_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function form_remove($data)
	{
	   $this->load->helper('date');
	   $this -> db -> where('confCode',$data['confCode']);
	   $this -> db ->delete('confs');
	   
}
}
?>