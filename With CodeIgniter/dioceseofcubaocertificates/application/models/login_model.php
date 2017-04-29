<?php
Class login_model extends CI_Model
{
 function login($username, $password)
 {
   $this->load->helper('date');
   $this -> db -> select('userCode, userName, password, parishCode');
   $this -> db -> from('users');
   $this -> db -> where('userName', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();
   
   
   if($query -> num_rows() == 1)
   {
	 
	 foreach ($query->result_array() as $row)
	{
			$data = array(
        'accessDate' => date('Y-m-d H:i:s'),
		'userCode' => $row['userCode'],
        'parishcode' => $row['parishCode']
		);
	}
	 $this -> db ->insert('accesses',$data);
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>