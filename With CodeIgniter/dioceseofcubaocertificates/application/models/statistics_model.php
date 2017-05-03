<?php
Class statistics_model extends CI_Model
{
 function countBapts($parishcode)
 {
   $this -> db -> select('bParishCode');
   $this -> db -> from('bapts');
   $this -> db -> where('bParishCode', $parishcode);

   $query = $this -> db -> get();
   return $query->num_rows();
   
 }
 
 function countConfs($parishcode)
 {
   $this -> db -> select('cParishCode');
   $this -> db -> from('confs');
   $this -> db -> where('cParishCode', $parishcode);

   $query = $this -> db -> get();
   return $query->num_rows();
   
 }

 function countAccess($parishcode)
 {
   $this -> db -> select('parishcode');
   $this -> db -> from('accesses');
   $this -> db -> where('parishcode', $parishcode);

   $query = $this -> db -> get();
   return $query->num_rows();
   
 }

 function countUsers()
 {
   $this -> db -> select('userName');
   $this -> db -> from('users');
   $query = $this -> db -> get();
   return $query->num_rows();
   
 }
 
 function countTotalBapts()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('bapts');
   $query = $this -> db -> get();
   return $query->num_rows();
   
 }
 
 function countTotalConfs()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('confs');
   $query = $this -> db -> get();
   return $query->num_rows();
   
 }
 
 function countVicariateHolyFamilyBapts()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('bapts');
   $ids = array(1001, 1002, 1003, 1004, 1005, 1006, 1007);
   $this -> db -> where_in('bParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows();
 }
 function countVicariateHolyFamilyConfs()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('confs');
   $ids = array(1001, 1002, 1003, 1004, 1005, 1006, 1007);
   $this -> db -> where_in('cParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows();
 }
 function countVicariatePerpetualHelpBapts()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('bapts');
   $ids = array(2001, 2002, 2003, 2004, 2005, 2006, 2007);
   $this -> db -> where_in('bParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariatePerpetualHelpConfs()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('confs');
   $ids = array(2001, 2002, 2003, 2004, 2005, 2006, 2007);
   $this -> db -> where_in('cParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateStoNiñoBapts()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('bapts');
   $ids = array(3001, 3002, 3003, 3004, 3005, 3006, 3007);
   $this -> db -> where_in('bParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateStoNiñoConfs()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('confs');
   $ids = array(3001, 3002, 3003, 3004, 3005, 3006, 3007);
   $this -> db -> where_in('cParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateSanPedroBapts()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('bapts');
   $ids = array(4001, 4002, 4003, 4004, 4005, 4006, 4007, 4008);
   $this -> db -> where_in('bParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateSanPedroConfs()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('confs');
   $ids = array(4001, 4002, 4003, 4004, 4005, 4006, 4007, 4008);
   $this -> db -> where_in('cParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateSantaRitaBapts()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('bapts');
   $ids = array(5001, 5002, 5003, 5004, 5005, 5006, 5007);
   $this -> db -> where_in('bParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateSantaRitaConfs()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('confs');
   $ids = array(5001, 5002, 5003, 5004, 5005, 5006, 5007);
   $this -> db -> where_in('cParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateStJosephBapts()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('bapts');
   $ids = array(6001, 6002, 6003, 6004, 6005, 6006, 6007, 6008, 6009);
   $this -> db -> where_in('bParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 function countVicariateStJosephConfs()
 {
   $this -> db -> select('firstName');
   $this -> db -> from('confs');
   $ids = array(6001, 6002, 6003, 6004, 6005, 6006, 6007, 6008, 6009);
   $this -> db -> where_in('cParishCode',$ids);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
 
 function countJanuaryBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',1);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countJanuaryConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',1);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countFebruaryBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',2);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countFebruaryConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',2);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countMarchBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',3);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countMarchConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',3);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countAprilBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',4);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countAprilConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',4);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countMayBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',5);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countMayConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',5);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countJuneBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',6);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countJuneConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',6);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countJulyBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',7);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countJulyConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',7);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countAugustBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',8);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countAugustConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',8);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countSeptemberBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',9);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countSeptemberConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',9);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countOctoberBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',10);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countOctoberConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',10);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countNovemberBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',11);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countNovemberConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',11);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countDecemberBapts()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('bapts');
   $this -> db -> where('MONTH(registered)',12);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
  function countDecemberConfs()
 {
	date_default_timezone_set("Asia/Manila");
	$a = date("Y");
   $this -> db -> select('*');
   $this -> db -> from('confs');
   $this -> db -> where('MONTH(registered)',12);
   $this -> db -> where('YEAR(registered)',$a);
   $query = $this -> db -> get();
   return $query->num_rows(); 
 }
}

 
?>