<!doctype html>
<?php echo link_tag('assets/css/bootstrap.css')?>
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
  				<p class="navbar-text">Welcome, <?php echo($username);?></p>
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
					<li class="active"><a href="#"><span class="glyphicon glyphicon-stats"></span> Check Statistics</a></li>
					<li><a href="<?php echo base_url('index.php/Adduser_controller/index')?>"><span class="glyphicon glyphicon-user"></span> Add Staff Account</a></li>
				</ul>
			</div>
		</nav>	
 	</div>
 	<!-- View Records and Statistics Section -->
 	<div class="row">
 		<!-- Left Column View Records Section -->
 		<div class="col-sm-6">
			<label>Records</label>
			<br>
			<br>
			<label>Select Records Time Range:</label>
			<div class="row">
				<div class="col-sm-6">
				<label>From</label>
				</div>
				<div class="col-sm-6">
				<label>To</label>
				</div>	
			</div>
			<div class="row">
				<!-- Start Month Section -->		 
				<div class="col-sm-3">
					<div class="form-group">
						<label for="startmonth">Month:</label>
						<select class="form-control" id="startmonth" name="startMonth">
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
				<!-- Start Year Section -->
				<div class="col-sm-3">
					<div class="form-group">
						<label for="startyear">Year:</label>
						<select class="form-control" id="startyear" name="startYear">
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
				<!-- End Month Section -->
				<div class="col-sm-3">
					<div class="form-group">
						<label for="endmonth">Month:</label>
						<select class="form-control" id="endmonth" name="endMonth">
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
				<!-- End Year Section -->
				<div class="col-sm-3">
					<div class="form-group">
						<label for="endyear">Year:</label>
						<select class="form-control" id="endyear" name="endYear">
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
			<!-- Submit and View Records Section -->
			<div class="row">
				<br>
				<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-eye-open"></span> Submit and View Records</button>
				<br>
				<br>
			</div>
		</div>
		<!-- Right Column Statistics Section -->
		<div class="col-sm-6">
			<label>Statistics</label>
			<br>
			<h4>You have accessed this site <?php echo($accessNum);?> times.</h4>
			<h3>Total Values</h3>
			<p><?php echo($usersNum);?> Staff Accounts</p>
			<p><?php echo($totalBaptsNum);?> Baptismal Certificates on Record</p>
			<p><?php echo($totalConfsNum);?> Confirmation Certificates on Record</p>
			<br>
			<!-- Statistics by Vicariate Section -->
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<th>Vicariate</th>
						<th>Baptismal Certificates</th>
						<th>Confirmation Certificates</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Vicariate of Holy Family</td>
						<td><?php echo($BaptsVicariateHolyFamily);?></td>
						<td><?php echo($ConfsVicariateHolyFamily);?></td>
					</tr>
					<tr>
						<td>Vicariate of Our Lady of Perpetual Help</td>
						<td><?php echo($BaptsVicariatePerpetualHelp);?></td>
						<td><?php echo($ConfsVicariatePerpetualHelp);?></td>
					</tr>
					<tr>
						<td>Vicariate of San Pedro Bautista</td>
						<td><?php echo($BaptsVicariateSanPedro);?></td>
						<td><?php echo($ConfsVicariateSanPedro);?></td>
					</tr>
					<tr>
						<td>Vicariate of Santa Rita de Cascia</td>
						<td><?php echo($BaptsVicariateSantaRita);?></td>
						<td><?php echo($ConfsVicariateSantaRita);?></td>
					</tr>
					<tr>
						<td>Vicariate of St. Joseph</td>
						<td><?php echo($BaptsVicariateStJoseph);?></td>
						<td><?php echo($ConfsVicariateStJoseph);?></td>
					</tr>
					<tr>
						<td>Vicariate of Sto. Niño</td>
						<td><?php echo($BaptsVicariateStoNiño);?></td>
						<td><?php echo($ConfsVicariateStoNiño);?></td>
					</tr>
				</tbody>
			</table>
			<!-- Statistics by Month and Year Section -->
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<th>Month and Year</th>
						<th>Baptismal Certificates</th>
						<th>Confirmation Certificates</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>January 2017</td>
						<td>1</td>
						<td>2</td>
					</tr>
					<tr>
						<td>February 2017</td>
						<td>3</td>
						<td>4</td>
					</tr>
					<tr>
						<td>March 2017</td>
						<td>5</td>
						<td>6</td>
					</tr>
					<tr>
						<td>April 2017</td>
						<td>7</td>
						<td>8</td>
					</tr>
					<tr>
						<td>May 2017</td>
						<td>9</td>
						<td>10</td>
					</tr>
					<tr>
						<td>June 2017</td>
						<td>11</td>
						<td>12</td>
					</tr>
				</tbody>
			</table>			
		</div>
	</div>
</div>
<!-- Main Container Ends -->
</body>
</html>