<?php session_start(); 
  if (isset($_SESSION['uqnuh1'])){header("Location:db.php");} else {echo(" ");};
 ?>

<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    background-color: #
    min-height:100%;}

header {
    padding: 1em;
    border-radius: 15px 15px 0px 0px;
    color: yellow;
    background-color: #003EFF;
    clear: left;
    text-align: center;}

footer {
    position: fixed;
    left: 0;
    clear: left;
    bottom: 0;
    color: yellow;
    background-color: #003EFF;
    width: 100%;
    text-align: center;}

nav {
    face: arial;
    border: 3px solid #FF6347;
    float: left;
    width: 55%;
    min-height: 380px;
    margin: 0;
    padding: 1em;}

nav ul {
    face: arial;
    list-style-type: none;
    padding: 0;}

nav ul a {
    face: arial;
    text-decoration: none;}

article {
    face: arial;
    margin-left: 170px;
    padding: 1em;
    overflow: hidden;
    min-height: 100%;}

</style>
</head>
<body>

<div class="container">
<header>
  <h1>
  <img src="images/logo.png" alt="Logo" style="width:85px;height:85px;" align="left">

  <font padding="1px" face="arial">ROMAN CATHOLIC DIOCESE OF CUBAO</font><br>
  <font size="5" face="arial">Certificates Database</font></h1>
</header>

<br>
<?php $_SESSION['try2']=" ajujujujuju "; ?>
<nav face="arial">
  <ul>
    <li><b><font size="5"><a href="#">FAQs</a></font></b></li>
    <ul><i><b>Can I access my baptismal/confirmation certificate?</b></i></ul>
    <ul>Only the authorized staff of the Diocese of Cubao are given accounts 
to access the certificates database.</ul><br>
    <ul><i><b>I<?php echo(" do not have access for ");?>the database, how can I have a copy of my baptismal/confirmation certificate?</b></i></ul>
    <ul>You may inquire at the Catholic Parish Office of your municipality.</ul>
    <br><br><br><br>
    <li><b><font size="5"><a href="#">Contact Details</a></font></b>
<text><br>For inquiries about this application, 
you may contact the developers at leandrodetorres23@gmail.com</text>
    </li>
  </ul>
</nav>

<article>
  <h1>To access certificates database and view statistics, log in using your credentials.</h1>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>   </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
  
  
  
  


</article>

<footer>
<i>
Civitas Supra Montem Posita</i>
</footer>

</div>

</body>
</html>

