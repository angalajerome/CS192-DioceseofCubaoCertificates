<?php
class baptedit_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function getBaptData($data)
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('bapts');
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