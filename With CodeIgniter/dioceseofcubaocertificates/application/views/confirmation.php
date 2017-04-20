
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
  <li><a href="<?php echo base_url('index.php/Baptism_controller/index')?>"  class="tablinks" style="color:yellow;"
    onclick="<?php echo base_url('index.php/Baptism_controller/index')?>" >Add Baptismal Certificates</a></li>
  <li><a href="javascript:void(0)" class="tablinks" style="color:yellow;"
    onclick="<?php echo base_url('index.php/Confirmation_controller/index')?>" >Add Confirmation Cerificates</a></li>
  <li><a href="stats.php" class="tablinks" style="color:yellow;"
    onclick="stats.php">Check Statistics</a></li>
</ul>

<div id="E" class="tabcontent">
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
  <b>Register a Person's Data</b><br>
  <form method="post" action="db.php">
  <br>First Name:
  <input type="text" name="cfName"><br> <?php echo("   "); ?>
  Middle Name:
  <input type="text" name="cmName"><br><?php echo("   "); ?>
  Last Name:
  <input type="text" name="clName"><br>
  <br><?php echo("Suffix:");?>
  <select name="csx">
    <option value="">None</option>
    <option value="Jr.">Jr.</option>
    <option value="Sr.">Sr.</option>
    <option value="III">III</option>
  </select> <br>
  <br>Mother Full Name:
  <input type="text" name="mom"><?php echo("   "); ?>
  Father Full Name:
  <input type="text" name="pop"><br>
  <br>BIRTHDATE:<br>
  <br><?php echo("Month:");?>
  <select name="bmon">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select>
  <?php echo("   Day  ");?>
    <select name="bday"><?php  for ($i=1; $i<=31; $i++){
    ?><option value="<?php echo $i;?>"><?php echo$i;?></option>
    <?php } ?> </select>
  <?php echo("  Year  ");?>
    <select name="byir"><?php  for ($i=1900; $i<=2020; $i++){
    ?><option value="<?php echo $i;?>"><?php echo$i;?></option>
    <?php } ?> </select>
  <br>
  <?php //if ($parish==9999) { 
    ?>

  <br>Baptismal Details<br>

  <br><?php echo("Baptismal Parish:");?>
<select name="baptParishCode">
    <option value = "Christ the King Parish (Greenmeadows)">Christ the King Parish (Greenmeadows)</option>
	<option value = "Christ the King Parish (Project 7)">Christ the King Parish (Project 7)</option>
	<option value = "Diocesan Shrine of St. Joseph">Diocesan Shrine of St. Joseph</option>
	<option value = "Holy Cross Parish">Holy Cross Parish</option>
	<option value = "Holy Family Parish (GSIS)">Holy Family Parish (GSIS)</option>
	<option value = "Holy Family Parish (Kamias)">Holy Family Parish (Kamias)</option>
	<option value = "Holy Family Parish (Roxas District)">Holy Family Parish (Roxas District)</option>
	<option value = "Immaculate Conception Parish (Damar)">Immaculate Conception Parish (Damar)</option>
	<option value = "Immaculate Conception Parish (Project 8))">Immaculate Conception Parish (Project 8)</option>
	<option value = "Immaculate Heart of Mary Parish">Immaculate Heart of Mary Parish</option>
	<option value = "Most Holy Redeemer Parish (Araneta)">Most Holy Redeemer Parish (Araneta)</option>
	<option value = "Most Holy Redeemer Parish (Masambong)">Most Holy Redeemer Parish (Masambong)</option>
	<option value = "National Shrine of Our Lady of Lourdes)">National Shrine of Our Lady of Lourdes</option>
	<option value = "National Shrine of Our Lady of Mount Carmel">National Shrine of Our Lady of Mount Carmel</option>
	<option value = "Nativity of the Lord Parish">Nativity of the Lord Parish</option>
	<option value = "Our Lady of Fatima Parish">Our Lady of Fatima Parish</option>
	<option value = "Our Lady of Hope Parish">Our Lady of Hope Parish</option>
	<option value = "Our Lady of Mount Carmel Parish (Project 6)">Our Lady of Mount Carmel Parish (Project 6)</option>
	<option value = "Our Lady of Pentecost Parish">Our Lady of Pentecost Parish</option>
	<option value = "Our Lady of Perpetual Help Parish – 13th Ave.">Our Lady of Perpetual Help Parish – 13th Ave.</option>
	<option value = "Our Lady of Perpetual Help Parish (Project 8)">Our Lady of Perpetual Help Parish (Project 8)</option>
	<option value = "Our Lady of the Miraculous Medal Parish">Our Lady of the Miraculous Medal Parish</option>
	<option value = "Parish of Mary, the Immaculate Conception">Parish of Mary, the Immaculate Conception</option>
	<option value = "Parish of the Hearts of Jesus and Mary)">Parish of the Hearts of Jesus and Mary</option>
	<option value = "Parish of the Holy Sacrifice)">Parish of the Holy Sacrifice)"></option>
	<option value = "Parish of the Lord of Divine Mercy">Parish of the Lord of Divine Mercy</option>
	<option value = "Resurrection of Our Lord Parish">Resurrection of Our Lord Parish)</option>
	<option value = "Sacred Heart of Jesus Parish">Sacred Heart of Jesus Parish</option>
	<option value = "Saint John Paul II Parish">Saint John Paul II Parish</option>
	<option value = "Saint Joseph the Worker Parish (Balintawak)">Saint Joseph the Worker Parish (Balintawak)</option>
	<option value = "Saint Jude Quasi-Parish">Saint Jude Quasi-Parish</option>
	<option value = "Saint Paul the Apostle Parish">Saint Paul the Apostle Parish)</option>
	<option value = "San Antonio de Padua Parish">San Antonio de Padua Parish</option>
	<option value = "San Isidro Labrador Quasi-Parish">San Isidro Labrador Quasi-Parish</option>
	<option value = "San Nicolas de Tolentino Parish">San Nicolas de Tolentino Parish)</option>
	<option value = "San Roque Parish">San Roque Parish</option>
	<option value = "Santa Maria della Strada Parish">Santa Maria della Strada Parish)</option>
	<option value = "Santo Domingo Parish (La Naval de Manila Shrine))">Santo Domingo Parish (La Naval de Manila Shrine)</option>
	<option value = "Santo Niño Parish Shrine">Santo Niño Parish Shrine)</option>
	<option value = "Santuario de San Pedro Bautista Parish">Santuario de San Pedro Bautista Parish</option>
	<option value = "Shrine of Jesus the Divine Word Parish">Shrine of Jesus the Divine Word Parish</option>
	<option value = "Sta. Perpetua Parish">Sta. Perpetua Parish</option>
	<option value = "Sta. Rita de Cascia Parish">Sta. Rita de Cascia Parish</option>
	<option value = "Sta. Teresita del Niño Jesus Parish">Sta. Teresita del Niño Jesus Parish</option>
	<option value = "Sto. Cristo de Bungad Parish)">Sto. Cristo de Bungad Parish</option>
	<option value = "Transfiguration of our Lord Parish">Transfiguration of our Lord Parish</option>
  </select>

  <br>Baptismal Date<br>
  <br><?php echo("Month:");?>
  <select name="bptmon">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select>
  <br>
  <?php echo("  Day  ");?>
    <select name="bptday"><?php  for ($i=1; $i<=31; $i++){
    ?><option value="<?php echo $i;?>"><?php echo$i;?></option>
    <?php } ?> </select>
  <?php echo("  Year  ");?>
    <select name="bptyir"><?php  for ($i=1900; $i<=2020; $i++){
    ?><option value="<?php echo $i;?>"><?php echo$i;?></option>
    <?php } ?> </select>
  <br>
  <br>Priest Full Name:
  <input type="text" name="cPriestName"><br>
  <br>Sponsor 1 Name:
  <input type="text" name="cSpA"> <?php echo("   "); ?>
  Sponsor 2 Name:
  <input type="text" name="cSpB"><br>
  <br>Book Number:
  <input type="number" name="cBookNum" min="1" max="100"><?php echo("   "); ?>
  Page Number:
  <input type="number" name="cPageNum" min="1" max="100"><?php echo("   "); ?>
  Line Number:
  <input type="number" name="cLineNum" min="1" max="100"><br>

  <br>Confirmation Admin Name:
  <input type="text" name="confAdmin"><br>

  <br>Confirmation Date<br>
  <br><?php echo("Month:");?>
  <select name="confMonth">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select>
  <?php echo("  Day  ");?>
    <select name="confDay"><?php  for ($i=1; $i<=31; $i++){
    ?><option value="<?php echo $i;?>"><?php echo$i;?></option>
    <?php } ?> </select>
  <?php echo("  Year  ");?>
    <select name="confYear"><?php  for ($i=1900; $i<=2020; $i++){
    ?><option value="<?php echo $i;?>"><?php echo$i;?></option>
    <?php } ?> </select>
  <br>
 
  <select name="baptParishCode">
    <option value = "Christ the King Parish (Greenmeadows)">Christ the King Parish (Greenmeadows)</option>
	<option value = "Christ the King Parish (Project 7)">Christ the King Parish (Project 7)</option>
	<option value = "Diocesan Shrine of St. Joseph">Diocesan Shrine of St. Joseph</option>
	<option value = "Holy Cross Parish">Holy Cross Parish</option>
	<option value = "Holy Family Parish (GSIS)">Holy Family Parish (GSIS)</option>
	<option value = "Holy Family Parish (Kamias)">Holy Family Parish (Kamias)</option>
	<option value = "Holy Family Parish (Roxas District)">Holy Family Parish (Roxas District)</option>
	<option value = "Immaculate Conception Parish (Damar)">Immaculate Conception Parish (Damar)</option>
	<option value = "Immaculate Conception Parish (Project 8))">Immaculate Conception Parish (Project 8)</option>
	<option value = "Immaculate Heart of Mary Parish">Immaculate Heart of Mary Parish</option>
	<option value = "Most Holy Redeemer Parish (Araneta)">Most Holy Redeemer Parish (Araneta)</option>
	<option value = "Most Holy Redeemer Parish (Masambong)">Most Holy Redeemer Parish (Masambong)</option>
	<option value = "National Shrine of Our Lady of Lourdes)">National Shrine of Our Lady of Lourdes</option>
	<option value = "National Shrine of Our Lady of Mount Carmel">National Shrine of Our Lady of Mount Carmel</option>
	<option value = "Nativity of the Lord Parish">Nativity of the Lord Parish</option>
	<option value = "Our Lady of Fatima Parish">Our Lady of Fatima Parish</option>
	<option value = "Our Lady of Hope Parish">Our Lady of Hope Parish</option>
	<option value = "Our Lady of Mount Carmel Parish (Project 6)">Our Lady of Mount Carmel Parish (Project 6)</option>
	<option value = "Our Lady of Pentecost Parish">Our Lady of Pentecost Parish</option>
	<option value = "Our Lady of Perpetual Help Parish – 13th Ave.">Our Lady of Perpetual Help Parish – 13th Ave.</option>
	<option value = "Our Lady of Perpetual Help Parish (Project 8)">Our Lady of Perpetual Help Parish (Project 8)</option>
	<option value = "Our Lady of the Miraculous Medal Parish">Our Lady of the Miraculous Medal Parish</option>
	<option value = "Parish of Mary, the Immaculate Conception">Parish of Mary, the Immaculate Conception</option>
	<option value = "Parish of the Hearts of Jesus and Mary)">Parish of the Hearts of Jesus and Mary</option>
	<option value = "Parish of the Holy Sacrifice)">Parish of the Holy Sacrifice)"></option>
	<option value = "Parish of the Lord of Divine Mercy">Parish of the Lord of Divine Mercy</option>
	<option value = "Resurrection of Our Lord Parish">Resurrection of Our Lord Parish)</option>
	<option value = "Sacred Heart of Jesus Parish">Sacred Heart of Jesus Parish</option>
	<option value = "Saint John Paul II Parish">Saint John Paul II Parish</option>
	<option value = "Saint Joseph the Worker Parish (Balintawak)">Saint Joseph the Worker Parish (Balintawak)</option>
	<option value = "Saint Jude Quasi-Parish">Saint Jude Quasi-Parish</option>
	<option value = "Saint Paul the Apostle Parish">Saint Paul the Apostle Parish)</option>
	<option value = "San Antonio de Padua Parish">San Antonio de Padua Parish</option>
	<option value = "San Isidro Labrador Quasi-Parish">San Isidro Labrador Quasi-Parish</option>
	<option value = "San Nicolas de Tolentino Parish">San Nicolas de Tolentino Parish)</option>
	<option value = "San Roque Parish">San Roque Parish</option>
	<option value = "Santa Maria della Strada Parish">Santa Maria della Strada Parish)</option>
	<option value = "Santo Domingo Parish (La Naval de Manila Shrine))">Santo Domingo Parish (La Naval de Manila Shrine)</option>
	<option value = "Santo Niño Parish Shrine">Santo Niño Parish Shrine)</option>
	<option value = "Santuario de San Pedro Bautista Parish">Santuario de San Pedro Bautista Parish</option>
	<option value = "Shrine of Jesus the Divine Word Parish">Shrine of Jesus the Divine Word Parish</option>
	<option value = "Sta. Perpetua Parish">Sta. Perpetua Parish</option>
	<option value = "Sta. Rita de Cascia Parish">Sta. Rita de Cascia Parish</option>
	<option value = "Sta. Teresita del Niño Jesus Parish">Sta. Teresita del Niño Jesus Parish</option>
	<option value = "Sto. Cristo de Bungad Parish)">Sto. Cristo de Bungad Parish</option>
	<option value = "Transfiguration of our Lord Parish">Transfiguration of our Lord Parish</option>
  </select>

  <br><br>
  <input type="submit" value="ADD NEW ENTRY">
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
  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'E')"
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

