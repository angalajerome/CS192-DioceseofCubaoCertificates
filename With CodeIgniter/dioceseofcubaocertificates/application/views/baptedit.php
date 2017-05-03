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
 	<!-- Input Section -->
	<?php
	foreach ($resultBapts->result_array() as $row)
	{
	?>
		<form accept-charset="UTF-8" role="form" action ="<?php echo base_url('index.php/BEdit_controller'); ?>" method = "POST">
			<div class="row">
				<label>Edit / View Baptismal Data</label>
				<br>
				<br>
				<!-- First Name Section -->
				<div class="form-group">
					<label for="firstname">First Name:</label>
					<input type="text" class="form-control" id="firstname" name="fName" <?php echo("value=".$row['firstName']." ");?>>
					<input type="hidden" name="baptCode" <?php echo("value=".$row['baptCode']." ");?>>
				</div>
				<br>
				<!-- Middle Name Section -->
				<div class="form-group">
					<label for="middlename">Middle Name:</label>
					<input type="text" class="form-control" id="middlename" name="mName" <?php echo("value=".$row['middleName']." ");?>>
				</div>
				<br>
				<!-- Last Name Section -->
				<div class="form-group">
					<label for="lastname">Last Name:</label>
					<input type="text" class="form-control" id="lastname" name="lName" <?php echo("value=".$row['lastName']." ");?>>
				</div>
				<br>
				<!-- Suffix Section -->
				<div class="form-group">
					<label for="suffix">Suffix:</label>
					<input type="text" class="form-control" id="suffix" name="Suffix" <?php echo("value=".$row['suffix']." ");?>>
				</div>
				<br>
				<!-- Father's Full Name Section -->
				<div class="form-group">
					<label for="fathersname">Father's Full Name:</label>
					<input type="text" class="form-control" id="fathersname" name="FatherName" <?php echo("value=".$row['father']." ");?>>
				</div>
				<br>
				<!-- Mother's Full Name Section -->
				<div class="form-group">
					<label for="mothersname">Mother's Full Name:</label>
					<input type="text" class="form-control" id="mothersname" name="MotherName" <?php echo("value=".$row['mother']." ");?>>
				</div>		
				<br>
				<label>Birthdate:</label>
			</div>
			<!-- Birthdate Section -->
			<div class="row">
				<div class="col-sm-4">
					<!-- Birth Month Section -->
					<div class="form-group">
						<label for="birthmonth">Month:</label>
						<select class="form-control" id="birthmonth" name="birthMonth">
							<option <?php if("January"==$row['bMonth']) {echo(" selected ");};?> value="January">January</option>

							<option <?php if("February"==$row['bMonth']) {echo(" selected ");};?> value="February">February</option>

							<option <?php if("March"==$row['bMonth']) {echo(" selected ");};?> value="March">March</option>

							<option <?php if("April"==$row['bMonth']) {echo(" selected ");};?> value="April">April</option>

							<option <?php if("May"==$row['bMonth']) {echo(" selected ");};?> value="May">May</option>

							<option <?php if("June"==$row['bMonth']) {echo(" selected ");};?> value="June">June</option>

							<option <?php if("July"==$row['bMonth']) {echo(" selected ");};?> value="July">July</option>

							<option <?php if("August"==$row['bMonth']) {echo(" selected ");};?> value="August">August</option>

							<option <?php if("September"==$row['bMonth']) {echo(" selected ");};?> value="September">September</option>

							<option <?php if("October"==$row['bMonth']) {echo(" selected ");};?> value="October">October</option>

							<option <?php if("November"==$row['bMonth']) {echo(" selected ");};?> value="November">November</option>

							<option <?php if("December"==$row['bMonth']) {echo(" selected ");};?> value="December">December</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Birth Day Section -->
					<div class="form-group">
						<label for="birthday">Day:</label>
						<select class="form-control" id="birthday" name="birthDay">
							<?php  for ($i=1; $i<=31; $i++){

								?><option <?php if($i==$row['bDay']) {echo(" selected ");};?>

								value="<?php echo $i;?>"><?php echo$i;?></option>

							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Birth Year Section -->
					<div class="form-group">
						<label for="birthyear">Year:</label>
						<select class="form-control" id="birthyear" name="birthYear">
							<?php  for ($i=1900; $i<=2020; $i++){

								?><option <?php if($i==$row['bYear']) {echo(" selected ");};?>

									value="<?php echo $i;?>"><?php echo$i;?></option>

							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<!-- Birthplace Section -->
				<div class="form-group">
					<label for="birthplace">Birthplace:</label>
					<input type="text" class="form-control" id="birthplace" name="bPlace" <?php echo("value=".$row['bPlace']." ");?>>
				</div>
				<br>
				<label>Baptism Details:</label>
			</div>
			<br>
			<!-- Baptism Details Section -->
			<div class="row">
				<!-- Baptism Parish Section -->
				<div class="form-group">
					<label for="baptismparish">Baptism Parish:</label>
					<select class="form-control" id="baptismparish" name="baptParishCode">
						
						<option <?php if($row['bParishCode']==2001) echo(" selected "); ?> value=2001><?php qq(2001) ?></option>

						<option <?php if($row['bParishCode']==5001) echo(" selected "); ?> value=5001><?php qq(5001) ?></option>

						<option <?php if($row['bParishCode']==6001) echo(" selected "); ?> value=6001><?php qq(6001) ?></option>

						<option <?php if($row['bParishCode']==6002) echo(" selected "); ?> value=6002><?php qq(6002) ?></option>

						<option <?php if($row['bParishCode']==3001) echo(" selected "); ?> value=3001><?php qq(3001) ?></option>

						<option <?php if($row['bParishCode']==6003) echo(" selected "); ?> value=6003><?php qq(6003) ?></option>

						<option <?php if($row['bParishCode']==1001) echo(" selected "); ?> value=1001><?php qq(1001) ?></option>

						<option <?php if($row['bParishCode']==4001) echo(" selected "); ?> value=4001><?php qq(4001) ?></option>

						<option <?php if($row['bParishCode']==3002) echo(" selected "); ?> value=3002><?php qq(3002) ?></option>

						<option <?php if($row['bParishCode']==6004) echo(" selected "); ?> value=6004><?php qq(6004) ?></option>

						<option <?php if($row['bParishCode']==1002) echo(" selected "); ?> value=1002><?php qq(1002) ?></option>

						<option <?php if($row['bParishCode']==4002) echo(" selected "); ?> value=4002><?php qq(4002) ?></option>

						<option <?php if($row['bParishCode']==4003) echo(" selected "); ?> value=4003><?php qq(4003) ?></option>

						<option <?php if($row['bParishCode']==1003) echo(" selected "); ?> value=1003><?php qq(1003) ?></option>

						<option <?php if($row['bParishCode']==2002) echo(" selected "); ?> value=2002><?php qq(2002) ?></option>

						<option <?php if($row['bParishCode']==1004) echo(" selected "); ?> value=1004><?php qq(1004) ?></option>

						<option <?php if($row['bParishCode']==3003) echo(" selected "); ?> value=3003><?php qq(3003) ?></option>

						<option <?php if($row['bParishCode']==3004) echo(" selected "); ?> value=3004><?php qq(3004) ?></option>

						<option <?php if($row['bParishCode']==6005) echo(" selected "); ?> value=6005><?php qq(6005) ?></option>

						<option <?php if($row['bParishCode']==2004) echo(" selected "); ?> value=2004><?php qq(2004) ?></option>

						<option <?php if($row['bParishCode']==3005) echo(" selected "); ?> value=3005><?php qq(3005) ?></option>

						<option <?php if($row['bParishCode']==2003) echo(" selected "); ?> value=2003><?php qq(2003) ?></option>

						<option <?php if($row['bParishCode']==3006) echo(" selected "); ?> value=3006><?php qq(3006) ?></option>

						<option <?php if($row['bParishCode']==5002) echo(" selected "); ?> value=5002><?php qq(5002) ?></option>

						<option <?php if($row['bParishCode']==6006) echo(" selected "); ?> value=6006><?php qq(6006) ?></option>

						<option <?php if($row['bParishCode']==6007) echo(" selected "); ?> value=6007><?php qq(6007) ?></option>

						<option <?php if($row['bParishCode']==5003) echo(" selected "); ?> value=5003><?php qq(5003) ?></option>

						<option <?php if($row['bParishCode']==1005) echo(" selected "); ?> value=1005><?php qq(1005) ?></option>

						<option <?php if($row['bParishCode']==2006) echo(" selected "); ?> value=2006><?php qq(2006) ?></option>

						<option <?php if($row['bParishCode']==4004) echo(" selected "); ?> value=4004><?php qq(4004) ?></option>

						<option <?php if($row['bParishCode']==5005) echo(" selected "); ?> value=5005><?php qq(5005) ?></option>

						<option <?php if($row['bParishCode']==1006) echo(" selected "); ?> value=1006><?php qq(1006) ?></option>

						<option <?php if($row['bParishCode']==5004) echo(" selected "); ?> value=5004><?php qq(5004) ?></option>

						<option <?php if($row['bParishCode']==6008) echo(" selected "); ?> value=6008><?php qq(6008) ?></option>

						<option <?php if($row['bParishCode']==3007) echo(" selected "); ?> value=3007><?php qq(3007) ?></option>

						<option <?php if($row['bParishCode']==2005) echo(" selected "); ?> value=2005><?php qq(2005) ?></option>

						<option <?php if($row['bParishCode']==6009) echo(" selected "); ?> value=6009><?php qq(6009) ?></option>

						<option <?php if($row['bParishCode']==4005) echo(" selected "); ?> value=4005><?php qq(4005) ?></option>

						<option <?php if($row['bParishCode']==3008) echo(" selected "); ?> value=3008><?php qq(3008) ?></option>

						<option <?php if($row['bParishCode']==4006) echo(" selected "); ?> value=4006><?php qq(4006) ?></option>

						<option <?php if($row['bParishCode']==1007) echo(" selected "); ?> value=1007><?php qq(1007) ?></option>

						<option <?php if($row['bParishCode']==4007) echo(" selected "); ?> value=4007><?php qq(4007) ?></option>

						<option <?php if($row['bParishCode']==5006) echo(" selected "); ?> value=5006><?php qq(5006) ?></option>

						<option <?php if($row['bParishCode']==4008) echo(" selected "); ?> value=4008><?php qq(4008) ?></option>

						<option <?php if($row['bParishCode']==5007) echo(" selected "); ?> value=5007><?php qq(5007) ?></option>

						<option <?php if($row['bParishCode']==2007) echo(" selected "); ?> value=2007><?php qq(2007) ?></option>
					</select>
				</div>
				<br>
				<label>Baptism Date:</label>
			</div>
			<!-- Baptism Date Section -->
			<div class="row">
				<div class="col-sm-4">
					<!-- Baptism Month Section -->
					<div class="form-group">
						<label for="baptismmonth">Month:</label>
						<select class="form-control" id="baptismmonth" name="baptMonth">
							<option <?php if("January"==$row['baptMonth']) {echo(" selected ");};?> value="January">January</option>

							<option <?php if("February"==$row['baptMonth']) {echo(" selected ");};?> value="February">February</option>

							<option <?php if("March"==$row['baptMonth']) {echo(" selected ");};?> value="March">March</option>

							<option <?php if("April"==$row['baptMonth']) {echo(" selected ");};?> value="April">April</option>

							<option <?php if("May"==$row['baptMonth']) {echo(" selected ");};?> value="May">May</option>

							<option <?php if("June"==$row['baptMonth']) {echo(" selected ");};?> value="June">June</option>

							<option <?php if("July"==$row['baptMonth']) {echo(" selected ");};?> value="July">July</option>

							<option <?php if("August"==$row['baptMonth']) {echo(" selected ");};?> value="August">August</option>

							<option <?php if("September"==$row['baptMonth']) {echo(" selected ");};?> value="September">September</option>

							<option <?php if("October"==$row['baptMonth']) {echo(" selected ");};?> value="October">October</option>

							<option <?php if("November"==$row['baptMonth']) {echo(" selected ");};?> value="November">November</option>

							<option <?php if("December"==$row['baptMonth']) {echo(" selected ");};?> value="December">December</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Baptism Day Section -->
					<div class="form-group">
						<label for="baptismday">Day:</label>
						<select class="form-control" id="baptismday" name="baptDay">
							<?php  for ($i=1; $i<=31; $i++){

							?><option <?php if($i==$row['baptDay']) {echo(" selected ");};?>

								value="<?php echo $i;?>"><?php echo$i;?></option>

							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Baptism Year Section -->
					<div class="form-group">
						<label for="baptismyear">Year:</label>
						<select class="form-control" id="baptismyear" name="baptYear">
							<?php  for ($i=1900; $i<=2020; $i++){

								?><option <?php if($i==$row['baptYear']) {echo(" selected ");};?>

							value="<?php echo $i;?>"><?php echo$i;?></option>

							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<br> 	
			<div class="row">
				<!-- Baptism Priest's Full Name Section -->
				<div class="form-group">
					<label for="baptismpriestfullname">Baptism Priest's Full Name:</label>
					<input type="text" class="form-control" id="baptismpriestfullname" name="baptPriestName" <?php echo("value=".$row['bPriestName']." ");?>>
				</div>
				<br>
				<!-- Baptism Sponsor 1 Name Section -->
				<div class="form-group">
					<label for="sponsor1name">Sponsor 1 Name:</label>
					<input type="text" class="form-control" id="sponsor1name" name="baptSponsorA" <?php echo("value=".$row['bSpA']." ");?>>
				</div>
				<br>
				<!-- Baptism Sponsor 2 Name Section -->
				<div class="form-group">
					<label for="sponsor2name">Sponsor 2 Name:</label>
					<input type="text" class="form-control" id="sponsor2name" name="baptSponsorB" <?php echo("value=".$row['bSpB']." ");?>>
				</div>
				<br>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<!-- Baptism Book Number Section -->
					<div class="form-group">
						<label for="baptismbooknumber">Book Number:</label>
						<input type="number" class="form-control" id="baptismbooknumber" min="1" max="100" name="baptBookNum" <?php echo("value=".$row['bBookNum']." ");?>>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Baptism Page Number Section -->
					<div class="form-group">
						<label for="baptismpagenumber">Page Number:</label>
						<input type="number" class="form-control" id="baptismpagenumber" min="1" max="100" name="baptPageNum" <?php echo("value=".$row['bPageNum']." ");?>>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Baptism Line Number Section -->
					<div class="form-group">
						<label for="baptismlinenumber">Line Number:</label>
						<input type="number" class="form-control" id="baptismlinenumber" min="1" max="100" name="baptLineNum" <?php echo("value=".$row['bLineNum']." ");?>>
					</div>
				</div>
			</div>
			<br>
			<!-- Save Changes to Baptism Entry Section -->
			<div class="row">
				<br>
				<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-floppy-disk"></span> Save All Changes to Baptism Entry</button>
				<br>
			</div>
			<!-- Cancel Section -->
			<div class="row">
				<br>
				<a href="<?php echo base_url('index.php/Search_controller/index');?>"   class="btn btn-default btn-block" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Go Back to Search Entries Page</a>
				<br>
			</div>
			<br>	
		</form>
		
		<form accept-charset="UTF-8" role="form" action ="<?php echo base_url('index.php/BPrint_controller'); ?>"  target='_blank'  method = "POST">
			<!-- Purpose of Printing Baptismal Certificate Section -->
			<input type="hidden" name="baptCode" <?php echo("value=".$row['baptCode']." ");?>>
			<div class="row">
				<div class="form-group">
					<label for="printbaptismpurpose">Purpose of Printing Baptismal Certificate:</label>
					<input type="text" class="form-control" id="printbaptismpurpose" name="printbaptcertpurpose">
				</div>
				<br>
			</div>
			<!-- Print Baptismal Certificate Section -->
			<div class="row">
				<br>
				<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-print" target="_blank"></span> Print Baptismal Certificate</button>
				<br>
			</div>
		</form>
		
		<form accept-charset="UTF-8" role="form" action ="<?php echo base_url('index.php/BDel_controller'); ?>" method = "POST" >
			<!-- Delete Baptism Entry Section -->
			<input type="hidden" name="baptCode" <?php echo("value=".$row['baptCode']." ");?>>
			<div class="row">
				<br>
				<button type="submit" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Delete Baptism Entry</button>
				<br>
			</div>
			<br>
			<br>
		</form>
	<?php
	}
	?>
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