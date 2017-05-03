<?php
class viewall_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function allBapts()
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('bapts');
	   $query = $this -> db -> get();
	   
	   return $query;
	}
	function allConfs()
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('confs');
	   
	   $query = $this -> db -> get();
	   
	   return $query;
	}
	
}
?>