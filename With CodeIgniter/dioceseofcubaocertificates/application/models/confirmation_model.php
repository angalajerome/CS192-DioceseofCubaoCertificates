<?php
class confirmation_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function form_insert($data)
	{
	   $this->load->helper('date');
	   $this -> db -> select('firstName, middleName, lastName, suffix, bDay, bMonth, bYear');
	   $this -> db -> from('confs');
	   $this -> db -> where('firstName', $data['firstName']);
	   $this -> db -> where('middleName', $data['middleName']);
	   $this -> db -> where('lastName', $data['lastName']);
	   $this -> db -> where('suffix', $data['suffix']);
	   $this -> db -> where('bDay', $data['bDay']);
	   $this -> db -> where('bMonth', $data['bMonth']);
	   $this -> db -> where('bYear', $data['bYear']);
	   
	   $query = $this -> db -> get();
	   
	   if ($query->num_rows() == 0)
	   {
		// Inserting in Table(students) of Database(college)
		$this->db->insert('confs', $data);
		return TRUE;
	   }
	   else
	   {
		// Inserting in Table(students) of Database(college)
		return FALSE;
	   }
	}
	function assign_confcode ()
	{
	   $this -> db -> select_max('confCode');
	   $this -> db -> from('confs');
	   
	   $query = $this -> db -> get();
	   foreach ($query->result_array() as $row)
		{
			$newcode = $row['confCode'] + 1;
		
		return $newcode;
		}
	}
}
?>