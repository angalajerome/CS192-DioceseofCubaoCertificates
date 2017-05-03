<?php
class cprint_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function getInfoConf($confcode)
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('confs');
	   $this -> db -> where('confCode',$confcode);
	   $query = $this -> db -> get();
	   return $query;
	}
	   
}
?>