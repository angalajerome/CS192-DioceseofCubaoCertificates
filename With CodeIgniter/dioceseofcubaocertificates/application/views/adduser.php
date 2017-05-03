<!doctype html>
<?php echo link_tag('assets/css/loginTemplate.css')?>
<?php echo link_tag('assets/css/singlePageTemplate.css')?>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Roman Catholic Diocese of Cubao Certificates Database</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/singlePageTemplate.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Login Template -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Main Container -->
<div class="container"> 
	<div class="row">
		<header>
			<h1 align="center">
				<br>
				<img class="logo" src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" style="width:85px;height:85px;">
				<font class="title" size="6">ROMAN CATHOLIC DIOCESE OF CUBAO</font>
				<br>
				<font class="title" size="5">Certificates Database</font>
			</h1>
		</header>
	</div>
  	<!-- User Information and Logout Section -->	
	<div class="row">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
 				<!-- User Information Section -->
  				<p class="navbar-text">Welcome, <?php echo($username);?> from <?php echo(qq($parishcode));?>!</p>
  				<!-- Logout Section -->
				<button type="submit" onclick="location.href='<?php echo base_url('index.php/Logout_controller'); ?>';" class="btn btn-danger navbar-btn pull-right"><span class="glyphicon glyphicon-log-out"></span> Log Out</button>
			</div>
		</nav>
 	</div>
 	<!-- Navigation Section -->	
	<div class="row">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url('index.php/Search_controller/index')?>"><span class="glyphicon glyphicon-search"></span> Search Entries</a></li>
					<li><a href="<?php echo base_url('index.php/Baptism_controller/index')?>"><span class="glyphicon glyphicon-plus"></span> Add Baptismal Certificates</a></li>
					<li><a href="<?php echo base_url('index.php/Confirmation_controller/index')?>"><span class="glyphicon glyphicon-plus"></span> Add Confirmation Certificates</a></li>
					<li><a href="<?php echo base_url('index.php/Statistics_controller/index')?>"><span class="glyphicon glyphicon-stats"></span> Check Statistics</a></li>
					<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Add Staff Account</a></li>
				</ul>
			</div>
		</nav>	
 	</div>
 	<!-- New Account Section -->
	<?php 
		echo validation_errors();?>
	<form accept-charset="UTF-8" role="form" action ="<?php echo base_url('index.php/UserAdd_controller'); ?>" method = "POST">
		<div class="row">
			<!-- New Account Parish Section -->
			<div class="form-group">

				<label for="newparish">New Account Parish:</label>
				<select class="form-control" id="newparish" name="NewParishCode">
					<option value="2001">Christ the King Parish (Greenmeadows)</option>
					<option value="5001">Christ the King Parish (Project 7)</option>
					<option value="6001">Diocesan Shrine of St. Joseph</option>
					<option value="6002">Holy Cross Parish</option>
					<option value="3001">Holy Family Parish (GSIS)</option>
					<option value="6003">Holy Family Parish (Kamias)</option>
					<option value="1001">Holy Family Parish (Roxas District)</option>
					<option value="4001">Immaculate Conception Parish (Damar)</option>
					<option value="3002">Immaculate Conception Parish (Project 8)</option>
					<option value="6004">Immaculate Heart of Mary Parish</option>
					<option value="1002">Most Holy Redeemer Parish (Araneta)</option>
					<option value="4002">Most Holy Redeemer Parish (Masambong)</option>
					<option value="4003">National Shrine of Our Lady of Lourdes</option>
					<option value="1003">National Shrine of Our Lady of Mount Carmel</option>
					<option value="2002">Nativity of the Lord Parish</option>
					<option value="1004">Our Lady of Fatima Parish</option>
					<option value="3003">Our Lady of Hope Parish</option>
					<option value="3004">Our Lady of Mount Carmel Parish (Project 6)</option>
					<option value="6005">Our Lady of Pentecost Parish</option>
					<option value="2004">Our Lady of Perpetual Help Parish – 13th Ave.</option>
					<option value="3005">Our Lady of Perpetual Help Parish (Project 8)</option>
					<option value="2003">Our Lady of the Miraculous Medal Parish</option>
					<option value="3006">Parish of Mary, the Immaculate Conception</option>
					<option value="5002">Parish of the Hearts of Jesus and Mary</option>
					<option value="6007">Parish of the Lord of Divine Mercy</option>
					<option value="5003">Resurrection of Our Lord Parish</option>
					<option value="1005">Sacred Heart of Jesus Parish</option>
					<option value="2006">Saint John Paul II Parish</option>
					<option value="4004">Saint Joseph the Worker Parish (Balintawak)</option>
					<option value="5005">Saint Jude Quasi-Parish</option>
					<option value="1006">Saint Paul the Apostle Parish</option>
					<option value="5004">San Antonio de Padua Parish</option>
					<option value="6008">San Isidro Labrador Quasi-Parish</option>
					<option value="3007">San Nicolas de Tolentino Parish</option>
					<option value="2005">San Roque Parish</option>
					<option value="6009">Santa Maria della Strada Parish</option>
					<option value="4005">Santo Domingo Parish (La Naval de Manila Shrine)</option>
					<option value="3008">Santo Niño Parish Shrine</option>
					<option value="4006">Santuario de San Pedro Bautista Parish</option>
					<option value="1007">Shrine of Jesus the Divine Word Parish</option>
					<option value="4007">Sta. Perpetua Parish</option>
					<option value="5006">Sta. Rita de Cascia Parish</option>
					<option value="4008">Sta. Teresita del Niño Jesus Parish</option>
					<option value="5007">Sto. Cristo de Bungad Parish</option>
					<option value="2007">Transfiguration of our Lord Parish</option>
				</select>
			</div>
		</div> 	
		<br>
		
			<div class="row">	
				<!-- New Account Username Section -->
				<div class="form-group">
					<label for="newusername">New Account Username:</label>
					<input type="text" class="form-control" id="newusername" name="NewUserName">
					<br>
				</div>
				<!-- New Account Password Section -->
				<div class="form-group">
					<label for="newpassword">New Account Password:</label>
					<input type="password" class="form-control" id="newpassword" name="NewPassword">
					<br>
				</div>
				<!-- New Account Username Section -->
				<div class="form-group">
					<label for="confirmpassword">Confirm and Re-type Password:</label>
					<input type="password" class="form-control" id="confirmpassword" name="ConfirmPassword">
					<br>
				</div>
			</div>
		<!-- Submit and Search Section -->
			<div class="row">
				<br>
				<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> Submit and Add New Staff Account</button>
				<br>
			</div>
	</form>
	<br>
 	<br>
</div>
<!-- Main Container Ends -->
</body>
</html>
<?php
  function qq($q){
      if ($q==1001) {echo 'Holy Family Parish (Roxas District)';}
  elseif ($q==1002) {echo 'Most Holy Redeemer Parish (Araneta)';}
  elseif ($q==1003) {echo 'National Shrine of Our Lady of Mount Carmel';}
  elseif ($q==1004) {echo 'Our Lady of Fatima Parish';}
  elseif ($q==1005) {echo 'Sacred Heart of Jesus Parish';}
  elseif ($q==1006) {echo 'Saint Paul the Apostle Parish';}
  elseif ($q==1007) {echo 'Shrine of Jesus the Divine Word Parish';}
  elseif ($q==2001) {echo 'Christ the King Parish (Greenmeadows)';}
  elseif ($q==2002) {echo 'Nativity of the Lord Parish';}
  elseif ($q==2003) {echo 'Our Lady of the Miraculous Medal Parish';}
  elseif ($q==2004) {echo 'Our Lady of Perpetual Help Parish – 13th Ave.';}
  elseif ($q==2005) {echo 'San Roque Parish';}
  elseif ($q==2006) {echo 'Saint John Paul II Parish';}
  elseif ($q==2007) {echo 'Transfiguration of our Lord Parish';}
  elseif ($q==3001) {echo 'Holy Family Parish (GSIS)';}
  elseif ($q==3002) {echo 'Immaculate Conception Parish (Project 8)';}
  elseif ($q==3003) {echo 'Our Lady of Hope Parish';}
  elseif ($q==3004) {echo 'Our Lady of Mount Carmel Parish (Project 6)';}
  elseif ($q==3005) {echo 'Our Lady of Perpetual Help Parish (Project 8)';}
  elseif ($q==3006) {echo 'Parish of Mary, the Immaculate Conception';}
  elseif ($q==3007) {echo 'San Nicolas de Tolentino Parish';}
  elseif ($q==3008) {echo 'Santo Niño Parish Shrine';}
  elseif ($q==4001) {echo 'Immaculate Conception Parish (Damar)';}
  elseif ($q==4002) {echo 'Most Holy Redeemer Parish (Masambong)';}
  elseif ($q==4003) {echo 'National Shrine of Our Lady of Lourdes';}
  elseif ($q==4004) {echo 'Saint Joseph the Worker Parish (Balintawak)';}
  elseif ($q==4005) {echo 'Santo Domingo Parish (La Naval de Manila Shrine)';}
  elseif ($q==4006) {echo 'Santuario de San Pedro Bautista Parish';}
  elseif ($q==4007) {echo 'Sta. Perpetua Parish';}
  elseif ($q==4008) {echo 'Sta. Teresita del Niño Jesus Parish';}
  elseif ($q==5001) {echo 'Christ the King Parish (Project 7)';}
  elseif ($q==5002) {echo 'Parish of the Hearts of Jesus and Mary';}
  elseif ($q==5003) {echo 'Resurrection of Our Lord Parish';}
  elseif ($q==5004) {echo 'San Antonio de Padua Parish';}
  elseif ($q==5005) {echo 'Saint Jude Quasi-Parish';}
  elseif ($q==5006) {echo 'Sta. Rita de Cascia Parish';}
  elseif ($q==5007) {echo 'Sto. Cristo de Bungad Parish';}
  elseif ($q==6001) {echo 'Diocesan Shrine of St. Joseph';}
  elseif ($q==6002) {echo 'Holy Cross Parish';}
  elseif ($q==6003) {echo 'Holy Family Parish (Kamias)';}
  elseif ($q==6004) {echo 'Immaculate Heart of Mary Parish';}
  elseif ($q==6005) {echo 'Our Lady of Pentecost Parish';}
  elseif ($q==6006) {echo 'Parish of the Holy Sacrifice';}
  elseif ($q==6007) {echo 'Parish of the Lord of Divine Mercy';}
  elseif ($q==6008) {echo 'San Isidro Labrador Quasi-Parish';}
  elseif ($q==6009) {echo 'Santa Maria della Strada Parish';}
  else {echo 'Diocese of Cubao';}
    }
  ?>