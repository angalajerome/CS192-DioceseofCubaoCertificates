<?php
class baptism_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function form_insert($data)
	{
	   $this->load->helper('date');
	   $this -> db -> select('firstName, middleName, lastName, suffix, bDay, bMonth, bYear');
	   $this -> db -> from('bapts');
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
		$this->db->insert('bapts', $data);
		return TRUE;
	   }
	   else
	   {
		// Inserting in Table(students) of Database(college)
		return FALSE;
	   }
	}
	function assign_baptcode ()
	{
	   $this -> db -> select_max('baptCode');
	   $this -> db -> from('bapts');
	   
	   $query = $this -> db -> get();
	   foreach ($query->result_array() as $row)
		{
			$newcode = $row['baptCode'] + 1;
		
		return $newcode;
		}
	}
}
?>