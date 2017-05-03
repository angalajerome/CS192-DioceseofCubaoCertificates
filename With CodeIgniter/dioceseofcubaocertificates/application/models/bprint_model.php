<?php
class bprint_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function getInfoBapt($baptcode)
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('bapts');
	   $this -> db -> where('baptCode',$baptcode);
	   $query = $this -> db -> get();
	   return $query;
	}
	   
}
?>