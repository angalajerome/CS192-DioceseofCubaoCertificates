<?php
class confedit_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function getConfData($data)
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('confs');
	   $this -> db -> where('firstName', $data['firstName']);
	   $this -> db -> where('lastName', $data['lastName']);
	   $this -> db -> where('bDay', $data['bDay']);
	   $this -> db -> where('bMonth', $data['bMonth']);
	   $this -> db -> where('bYear', $data['bYear']);
	   
	   $query = $this -> db -> get();
	   
	   return $query;
	}
}
?>