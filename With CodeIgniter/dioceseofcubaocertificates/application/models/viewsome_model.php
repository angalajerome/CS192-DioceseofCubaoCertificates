<?php
class viewsome_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function searchBapts($data)
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('bapts');
	   $this -> db -> like('firstName', $data['firstName'],'both');
	   $this -> db -> like('lastName', $data['lastName'],'both');
	   $this -> db -> where('bDay', $data['bDay']);
	   $this -> db -> where('bMonth', $data['bMonth']);
	   $this -> db -> where('bYear', $data['bYear']);
	   
	   $query = $this -> db -> get();
	   
	   return $query;
	}
	function searchConfs($data)
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('confs');
	   $this -> db -> like('firstName', $data['firstName'],'both');
	   $this -> db -> like('lastName', $data['lastName'],'both');
	   $this -> db -> where('bDay', $data['bDay']);
	   $this -> db -> where('bMonth', $data['bMonth']);
	   $this -> db -> where('bYear', $data['bYear']);
	   
	   $query = $this -> db -> get();
	   
	   return $query;
	}
	
}
?>