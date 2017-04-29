<!doctype html>
<?php echo link_tag('assets/css/loginTemplate.css')?>
<?php echo link_tag('assets/css/singlePageTemplate.css')?>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Roman Catholic Diocese of Cubao Certificates Database</title>
<link rel="shortcut icon" href="logo.png">
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
  				<p class="navbar-text">Welcome, <?php echo($username);?>!</p>
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
					<li class="active"><a href="#"><span class="glyphicon glyphicon-plus"></span> Add Confirmation Certificates</a></li>
					<li><a href="<?php echo base_url('index.php/Statistics_controller/index')?>"><span class="glyphicon glyphicon-stats"></span> Check Statistics</a></li>
					<li><a href="<?php echo base_url('index.php/Adduser_controller/index')?>"><span class="glyphicon glyphicon-user"></span> Add Staff Account</a></li>
				</ul>
			</div>
		</nav>	
 	</div>
 	<!-- Input Section -->
 	<form accept-charset="UTF-8" role="form" action ="<?php echo base_url('index.php/ConfAdd_controller'); ?>" method = "POST">
 		<div class="row">
			<label>Register a Person's Confirmation Data</label>
			<br>
			<br>
			<!-- First Name Section -->
			<div class="form-group">
				<label for="firstname">First Name:</label>
				<input type="text" class="form-control" id="firstname" name="fName">
			</div>
			<br>
			<!-- Middle Name Section -->
			<div class="form-group">
				<label for="middlename">Middle Name:</label>
				<input type="text" class="form-control" id="middlename" name="mName">
			</div>
			<br>
			<!-- Last Name Section -->
			<div class="form-group">
				<label for="lastname">Last Name:</label>
				<input type="text" class="form-control" id="lastname" name="lName">
			</div>
			<br>
			<!-- Suffix Section -->
			<div class="form-group">
				<label for="suffix">Suffix:</label>
				<input type="text" class="form-control" id="suffix" name="Suffix">
			</div>
			<br>
			<!-- Father's Full Name Section -->
			<div class="form-group">
				<label for="fathersname">Father's Full Name:</label>
				<input type="text" class="form-control" id="fathersname" name="FatherName">
			</div>
			<br>
			<!-- Mother's Full Name Section -->
			<div class="form-group">
				<label for="mothersname">Mother's Full Name:</label>
				<input type="text" class="form-control" id="mothersname" name="MotherName">
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
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Birth Day Section -->
				<div class="form-group">
					<label for="birthday">Day:</label>
					<select class="form-control" id="birthday" name="birthDay">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Birth Year Section -->
				<div class="form-group">
					<label for="birthyear">Year:</label>
					<select class="form-control" id="birthyear" name="birthYear">
						<option value="1900">1900</option>
						<option value="1901">1901</option>
						<option value="1902">1902</option>
						<option value="1903">1903</option>
						<option value="1904">1904</option>
						<option value="1905">1905</option>
						<option value="1906">1906</option>
						<option value="1907">1907</option>
						<option value="1908">1908</option>
						<option value="1909">1909</option>
						<option value="1910">1910</option>
						<option value="1911">1911</option>
						<option value="1912">1912</option>
						<option value="1913">1913</option>
						<option value="1914">1914</option>
						<option value="1915">1915</option>
						<option value="1916">1916</option>
						<option value="1917">1917</option>
						<option value="1918">1918</option>
						<option value="1919">1919</option>
						<option value="1920">1920</option>
						<option value="1921">1921</option>
						<option value="1922">1922</option>
						<option value="1923">1923</option>
						<option value="1924">1924</option>
						<option value="1925">1925</option>
						<option value="1926">1926</option>
						<option value="1927">1927</option>
						<option value="1928">1928</option>
						<option value="1929">1929</option>
						<option value="1930">1930</option>
						<option value="1931">1931</option>
						<option value="1932">1932</option>
						<option value="1933">1933</option>
						<option value="1934">1934</option>
						<option value="1935">1935</option>
						<option value="1936">1936</option>
						<option value="1937">1937</option>
						<option value="1938">1938</option>
						<option value="1939">1939</option>
						<option value="1940">1940</option>
						<option value="1941">1941</option>
						<option value="1942">1942</option>
						<option value="1943">1943</option>
						<option value="1944">1944</option>
						<option value="1945">1945</option>
						<option value="1946">1946</option>
						<option value="1947">1947</option>
						<option value="1948">1948</option>
						<option value="1949">1949</option>
						<option value="1950">1950</option>
						<option value="1951">1951</option>
						<option value="1952">1952</option>
						<option value="1953">1953</option>
						<option value="1954">1954</option>
						<option value="1955">1955</option>
						<option value="1956">1956</option>
						<option value="1957">1957</option>
						<option value="1958">1958</option>
						<option value="1959">1959</option>
						<option value="1960">1960</option>
						<option value="1961">1961</option>
						<option value="1962">1962</option>
						<option value="1963">1963</option>
						<option value="1964">1964</option>
						<option value="1965">1965</option>
						<option value="1966">1966</option>
						<option value="1967">1967</option>
						<option value="1968">1968</option>
						<option value="1969">1969</option>
						<option value="1970">1970</option>
						<option value="1971">1971</option>
						<option value="1972">1972</option>
						<option value="1973">1973</option>
						<option value="1974">1974</option>
						<option value="1975">1975</option>
						<option value="1976">1976</option>
						<option value="1977">1977</option>
						<option value="1978">1978</option>
						<option value="1979">1979</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
					</select>
				</div>
				<br>
			</div>
			<label>Baptism Details:</label>
		</div>
		<br>
		<!-- Baptism Details Section -->
		<div class="row">
			<!-- Baptism Parish Section -->
			<div class="form-group">
				<label for="baptismparish">Baptism Parish:</label>
				<select class="form-control" id="baptismparish" name="baptParishCode">
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
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Baptism Day Section -->
				<div class="form-group">
					<label for="baptismday">Day:</label>
					<select class="form-control" id="baptismday" name="baptDay">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Baptism Year Section -->
				<div class="form-group">
					<label for="baptismyear">Year:</label>
					<select class="form-control" id="baptismyear" name="baptYear">
						<option value="1900">1900</option>
						<option value="1901">1901</option>
						<option value="1902">1902</option>
						<option value="1903">1903</option>
						<option value="1904">1904</option>
						<option value="1905">1905</option>
						<option value="1906">1906</option>
						<option value="1907">1907</option>
						<option value="1908">1908</option>
						<option value="1909">1909</option>
						<option value="1910">1910</option>
						<option value="1911">1911</option>
						<option value="1912">1912</option>
						<option value="1913">1913</option>
						<option value="1914">1914</option>
						<option value="1915">1915</option>
						<option value="1916">1916</option>
						<option value="1917">1917</option>
						<option value="1918">1918</option>
						<option value="1919">1919</option>
						<option value="1920">1920</option>
						<option value="1921">1921</option>
						<option value="1922">1922</option>
						<option value="1923">1923</option>
						<option value="1924">1924</option>
						<option value="1925">1925</option>
						<option value="1926">1926</option>
						<option value="1927">1927</option>
						<option value="1928">1928</option>
						<option value="1929">1929</option>
						<option value="1930">1930</option>
						<option value="1931">1931</option>
						<option value="1932">1932</option>
						<option value="1933">1933</option>
						<option value="1934">1934</option>
						<option value="1935">1935</option>
						<option value="1936">1936</option>
						<option value="1937">1937</option>
						<option value="1938">1938</option>
						<option value="1939">1939</option>
						<option value="1940">1940</option>
						<option value="1941">1941</option>
						<option value="1942">1942</option>
						<option value="1943">1943</option>
						<option value="1944">1944</option>
						<option value="1945">1945</option>
						<option value="1946">1946</option>
						<option value="1947">1947</option>
						<option value="1948">1948</option>
						<option value="1949">1949</option>
						<option value="1950">1950</option>
						<option value="1951">1951</option>
						<option value="1952">1952</option>
						<option value="1953">1953</option>
						<option value="1954">1954</option>
						<option value="1955">1955</option>
						<option value="1956">1956</option>
						<option value="1957">1957</option>
						<option value="1958">1958</option>
						<option value="1959">1959</option>
						<option value="1960">1960</option>
						<option value="1961">1961</option>
						<option value="1962">1962</option>
						<option value="1963">1963</option>
						<option value="1964">1964</option>
						<option value="1965">1965</option>
						<option value="1966">1966</option>
						<option value="1967">1967</option>
						<option value="1968">1968</option>
						<option value="1969">1969</option>
						<option value="1970">1970</option>
						<option value="1971">1971</option>
						<option value="1972">1972</option>
						<option value="1973">1973</option>
						<option value="1974">1974</option>
						<option value="1975">1975</option>
						<option value="1976">1976</option>
						<option value="1977">1977</option>
						<option value="1978">1978</option>
						<option value="1979">1979</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
					</select>
				</div>
				<br>
			</div>
			<label>Confirmation Details:</label>
		</div>
		<br>
		<!-- Confirmation Details Section -->
		<div class="row">
			<!-- Confirmation Parish Section -->
			<div class="form-group">
				<label for="confirmationparish">Confirmation Parish:</label>
				<select class="form-control" id="confirmationparish" name="confParishCode">
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
			<br>
			<label>Confirmation Date:</label>
		</div>
		<!-- Confirmation Date Section -->
		<div class="row">
			<div class="col-sm-4">
				<!-- Confirmation Month Section -->
				<div class="form-group">
					<label for="confirmationmonth">Month:</label>
					<select class="form-control" id="confirmationmonth" name="confMonth">
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
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Confirmation Day Section -->
				<div class="form-group">
					<label for="confirmationday">Day:</label>
					<select class="form-control" id="confirmationday" name="confDay">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Confirmation Year Section -->
				<div class="form-group">
					<label for="confirmationyear">Year:</label>
					<select class="form-control" id="confirmationyear" name="confYear">
						<option value="1900">1900</option>
						<option value="1901">1901</option>
						<option value="1902">1902</option>
						<option value="1903">1903</option>
						<option value="1904">1904</option>
						<option value="1905">1905</option>
						<option value="1906">1906</option>
						<option value="1907">1907</option>
						<option value="1908">1908</option>
						<option value="1909">1909</option>
						<option value="1910">1910</option>
						<option value="1911">1911</option>
						<option value="1912">1912</option>
						<option value="1913">1913</option>
						<option value="1914">1914</option>
						<option value="1915">1915</option>
						<option value="1916">1916</option>
						<option value="1917">1917</option>
						<option value="1918">1918</option>
						<option value="1919">1919</option>
						<option value="1920">1920</option>
						<option value="1921">1921</option>
						<option value="1922">1922</option>
						<option value="1923">1923</option>
						<option value="1924">1924</option>
						<option value="1925">1925</option>
						<option value="1926">1926</option>
						<option value="1927">1927</option>
						<option value="1928">1928</option>
						<option value="1929">1929</option>
						<option value="1930">1930</option>
						<option value="1931">1931</option>
						<option value="1932">1932</option>
						<option value="1933">1933</option>
						<option value="1934">1934</option>
						<option value="1935">1935</option>
						<option value="1936">1936</option>
						<option value="1937">1937</option>
						<option value="1938">1938</option>
						<option value="1939">1939</option>
						<option value="1940">1940</option>
						<option value="1941">1941</option>
						<option value="1942">1942</option>
						<option value="1943">1943</option>
						<option value="1944">1944</option>
						<option value="1945">1945</option>
						<option value="1946">1946</option>
						<option value="1947">1947</option>
						<option value="1948">1948</option>
						<option value="1949">1949</option>
						<option value="1950">1950</option>
						<option value="1951">1951</option>
						<option value="1952">1952</option>
						<option value="1953">1953</option>
						<option value="1954">1954</option>
						<option value="1955">1955</option>
						<option value="1956">1956</option>
						<option value="1957">1957</option>
						<option value="1958">1958</option>
						<option value="1959">1959</option>
						<option value="1960">1960</option>
						<option value="1961">1961</option>
						<option value="1962">1962</option>
						<option value="1963">1963</option>
						<option value="1964">1964</option>
						<option value="1965">1965</option>
						<option value="1966">1966</option>
						<option value="1967">1967</option>
						<option value="1968">1968</option>
						<option value="1969">1969</option>
						<option value="1970">1970</option>
						<option value="1971">1971</option>
						<option value="1972">1972</option>
						<option value="1973">1973</option>
						<option value="1974">1974</option>
						<option value="1975">1975</option>
						<option value="1976">1976</option>
						<option value="1977">1977</option>
						<option value="1978">1978</option>
						<option value="1979">1979</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
					</select>
				</div>
			</div>
		</div>
		<br> 	 	 	
		<div class="row">
			<!-- Confirmation Priest's Full Name Section -->
			<div class="form-group">
				<label for="confirmationpriestfullname">Confirmation Bishop's Full Name:</label>
				<input type="text" class="form-control" id="confirmationpriestfullname" name="cBishopName">
			</div>
			<br>
			<!-- Confirmation Admin's Name Section -->
			<div class="form-group">
				<label for="adminname">Confirmation Admin's Name:</label>
				<input type="text" class="form-control" id="adminname" name="confAdmin">
			</div>
			<br>
			<!-- Confirmation Sponsor 1 Name Section -->
			<div class="form-group">
				<label for="sponsor1name">Sponsor 1 Name:</label>
				<input type="text" class="form-control" id="sponsor1name" name="cSpA">
			</div>
			<br>
			<!-- Confirmation Sponsor 2 Name Section -->
			<div class="form-group">
				<label for="sponsor2name">Sponsor 2 Name:</label>
				<input type="text" class="form-control" id="sponsor2name" name="cSpB">
			</div>
			<br>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<!-- Confirmation Book Number Section -->
				<div class="form-group">
					<label for="confirmationbooknumber">Book Number:</label>
					<input type="number" class="form-control" id="confirmationbooknumber" min="1" max="100" name="cBookNum">
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Confirmation Page Number Section -->
				<div class="form-group">
					<label for="confirmationpagenumber">Page Number:</label>
					<input type="number" class="form-control" id="confirmationpagenumber" min="1" max="100" name="cPageNum">
				</div>
			</div>
			<div class="col-sm-4">
				<!-- Confirmation Line Number Section -->
				<div class="form-group">
					<label for="confirmationlinenumber">Line Number:</label>
					<input type="number" class="form-control" id="confirmationlinenumber" min="1" max="100" name="cLineNum">
				</div>
			</div>
		</div>
		<br>
		<!-- Submit and Add New Confirmation Entry Section -->
		<div class="row">
			<br>
			<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> Submit and Add New Confirmation Entry</button>
			<br>
		</div>
		<br>
		<br>
	</form>
</div>
<!-- Main Container Ends -->
</body>
</html>