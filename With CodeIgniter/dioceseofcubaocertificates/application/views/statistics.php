<!DOCTYPE html>
<html>
<head>
<style>

div.container {
    width: 100%;
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
    border: 3px solid #FF6347;
    float: left;
    width: 35%;
    min-height: 100%;
    margin: 0;
    padding: 1em;
    max-width: 30%}

nav ul {
    list-style-type: none;
    padding: 0;}

nav ul a {
    text-decoration: none;}

article {
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
  <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" style="width:85px;height:85px;" align="left">
  <font padding="1px" face="arial">ROMAN CATHOLIC DIOCESE OF CUBAO</font><br>
  <font size="5" face="arial">Certificates Database</font></h1>
</header>

<html>
<style>
body {font-family: "Lato", sans-serif;}

ul.tab {
  list-style-type: none;
  max-width: 50%
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #ccc;
  color: yellow;
  position:50%;
  background-color: #0267FD;}
/* Float the list items side by side */
ul.tab li {float: left; color: yellow;}
/* Style the links inside the list items */
ul.tab li a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;}
/* Change background color of links on hover */
ul.tab li a:hover {
  background-color: #003F87;}
/* Create an active/current tablink class */
ul.tab li a:focus, .active {
  background-color: #26466D;}
/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 0px solid #ccc;
  border-top: none;
  font-color:yellow;}
</style>

<body>
<ul class="tab">
  <li><a href="db.php" class="tablinks" style="color:yellow;"
    onclick="db.php">Search Entries</a></li>
  <li><a href="<?php echo base_url('index.php/Baptism_controller/index')?>" class="tablinks" style="color:yellow;"
    onclick="<?php echo base_url('index.php/Baptism_controller/index')?>" >Add Baptismal Certificates</a></li>
  <li><a href="<?php echo base_url('index.php/Confirmation_controller/index')?>" class="tablinks" style="color:yellow;"
    onclick="<?php echo base_url('index.php/Confirmation_controller/index')?>">Add Confirmation Cerificates</a></li>
  <li><a href="javascript:void(0)" class="tablinks" style="color:yellow;"
    onclick="<?php echo base_url('index.php/Statistics_controller/index')?>">Check Statistics</a></li>
</ul>

<div id="C" class="tabcontent">
<nav>
  <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="TempLogo" vspace="20" hspace="20"
    style="width:120px;height:120px;" align="left">

  <ul><b>Welcome, <?php echo $username; ?>! </b></ul>
  <br> <br> <br> <br>
  <p>This app is created by UP Diliman students for the Diocese of Cubao to 
systemize certificates database access, as a course requirement for CS 192.</p>
  <br>
  
	<div class = "logout">
		<form action ="<?php echo base_url('index.php/Logout_controller'); ?>" method = "POST">
			<input type="submit" value="Log Out">

		</form>
	</div>
  </ul>

</nav>

<article>
  <i>PUTANGINAAAAAAA</i>
  <h1>Statistics</h1>
 
</style>
</head>
<body>

  <br>

  <b>View Records</b>
  <form method="post" action="stats.php?corp=9871">
  <br>
  From <br>
  <br><?php echo(" ");?>
  <select name="startMonth">
    <option selected value=1>January</option>
    <option value=2>February</option>
    <option value=3>March</option>
    <option value=4>April</option>
    <option value=5>May</option>
    <option value=6>June</option>
    <option value=7>July</option>
    <option value=8>August</option>
    <option value=9>September</option>
    <option value=10>October</option>
    <option value=11>November</option>
    <option value=12>December</option>
  </select>
  <br>
  <br>
  To <br>
  <br><?php echo(" ");?>
  <select name="endMonth">
    <option selected value=1>January</option>
    <option value=2>February</option>
    <option value=3>March</option>
    <option value=4>April</option>
    <option value=5>May</option>
    <option value=6>June</option>
    <option value=7>July</option>
    <option value=8>August</option>
    <option value=9>September</option>
    <option value=10>October</option>
    <option value=11>November</option>
    <option value=12>December</option>
  </select>
 </select>
  <br>
  <input type="submit" value="View Records">
  </form>
</article>
</div>


<script>
  function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";}
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");}
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";}
</script>
</body>
</html>

<?php

echo("");

?>
  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'C')"
  id="defaultOpen"></a>
<script>
  document.getElementById("defaultOpen").click();
</script>

<footer>
  <i>Civitas Supra Montem Posita</i>
</footer>

</div>

</body>
</html>

