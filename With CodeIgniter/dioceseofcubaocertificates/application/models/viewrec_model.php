<?php
class viewrec_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function getRecBapts($data)
	{
	   $this->load->helper('date');
	   $this -> db ->select('*');
	   $this -> db -> from('bapts');
	   $this->db->where('MONTH(registered)>=', '$data["startMonth"]');
	   $this->db->where('YEAR(registered)', '$data["startYear"]');
	   $this->db->or_where('YEAR(registered)>', '$data["startYear"]');
	   $this->db->where('MONTH(registered)<', '$data["endMonth"]');
	   $this->db->where('YEAR(registered)', '$data["endYear"]');
	   $this->db->or_where('YEAR(registered)<', '$data["endYear"]');
	   $query = $this -> db -> get();
	   return $query;
	}

	function getRecConfs($data)
	{
	   $this->load->helper('date');
	   $this -> db ->select('*');
	   $this -> db -> from('confs');
	   $this->db->where('MONTH(registered)>=', '$data["startMonth"]');
	   $this->db->where('YEAR(registered)', '$data["startYear"]');
	   $this->db->or_where('YEAR(registered)>', '$data["startYear"]');
	   $this->db->where('MONTH(registered)<', '$data["endMonth"]');
	   $this->db->where('YEAR(registered)', '$data["endYear"]');
	   $this->db->or_where('YEAR(registered)<', '$data["endYear"]');
	   $query = $this -> db -> get();
	   return $query;
	}
}
?>