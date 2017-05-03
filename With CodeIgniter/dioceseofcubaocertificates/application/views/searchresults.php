<!doctype html>
<?php echo link_tag('assets/css/bootstrap.css')?>
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
 	<!-- Baptismal Certificates Table Section -->
 	<div class="row">
 		<!-- Go back to Search Entries Page Section -->
		<br>
		<a href="<?php echo base_url('index.php/Search_controller/index');?>"  class="btn btn-default btn-block" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Go Back to Search Entries Page</a>
		<br>
		<br>
 		<label>Baptismal Certificates</label>
			<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Birthday</th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($resultBapts->result_array() as $row)
				{
					echo("<tr>");
					echo("<td>".$row['lastName']."</td>");
					echo("<td>".$row['firstName']."</td>");
					echo("<td>".$row['bMonth']." ".$row['bDay'].",".$row['bYear']."</td>");
					
					 if ($parishcode == 9999 || $parishcode == $row['bParishCode']) {
						echo("<td>");
						echo('<form accept-charset="UTF-8" role="form" action ="');
						echo base_url('index.php/BaptEdit_controller/index');
						echo ('" method="POST">');
						echo ('<input type="hidden" name="firstName" value="'.$row['firstName'].'">');
						echo ('<input type="hidden" name="lastName" value="'.$row['lastName'].'">');
						echo ('<input type="hidden" name="bMonth" value="'.$row['bMonth'].'">');
						echo ('<input type="hidden" name="bDay" value="'.$row['bDay'].'">');
						echo ('<input type="hidden" name="bYear" value="'.$row['bYear'].'">');
						echo('<button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-pencil"></span> Edit / <span class="glyphicon glyphicon-eye-open"></span> View Full Confirmation Details</a>');
						echo("</form>");
						echo("</td>");
						echo("</tr>");
					}
					else{
						echo("<td>");
						qq($row['bParishCode']);
						echo(" owns this certificate</td>");
					}
				}
				?>
			</tbody>
		</table>	
	</div>
	<br>
	<br>
 	<!-- Confirmation Certificates Table Section -->
 	<div class="row">
 		<label>Confirmation Certificates</label>
			<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Birthday</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($resultConfs->result_array() as $row)
				{
					echo("<tr>");
					echo("<td>".$row['lastName']."</td>");
					echo("<td>".$row['firstName']."</td>");
					echo("<td>".$row['bMonth']." ".$row['bDay'].",".$row['bYear']."</td>");
		
					if ($parishcode == 9999 || $parishcode == $row['cParishCode']) {
						echo("<td>");
						echo('<form accept-charset="UTF-8" role="form" action ="');
						echo base_url('index.php/ConfEdit_controller/index');
						echo ('" method="POST">');
						echo ('<input type="hidden" name="firstName" value="'.$row['firstName'].'">');
						echo ('<input type="hidden" name="lastName" value="'.$row['lastName'].'">');
						echo ('<input type="hidden" name="bMonth" value="'.$row['bMonth'].'">');
						echo ('<input type="hidden" name="bDay" value="'.$row['bDay'].'">');
						echo ('<input type="hidden" name="bYear" value="'.$row['bYear'].'">');
						echo('<button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-pencil"></span> Edit / <span class="glyphicon glyphicon-eye-open"></span> View Full Confirmation Details</a>');
						echo("</form>");
						echo("</td>");
						echo("</tr>");
					}
					
					else{
						echo("<td>");
						qq($row['cParishCode']);
						echo(" owns this certificate</td>");
					}
				}
				?>
				
			</tbody>
		</table>	
	</div>
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