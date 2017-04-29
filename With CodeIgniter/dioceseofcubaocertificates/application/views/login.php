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
  	<!-- FAQ and Login Section -->
  	<div class="row">
		<footer>
			<!-- FAQ Section -->
			<div class="col-sm-6">
				<article class="footer_column">
					<h2 class="faq">Frequently Asked Questions</h2>
					<p class="question_column">1. Can I access my baptismal/confirmation certificates?</p>
					<p class="text_column">Only authorized staff of the Diocese of Cubao are given accounts to access the certificates database.</p>
					<p class="question_column">2. I do not have access with the database, how can I get a copy of my baptismal/confirmation certificate?</p>
					<p class="text_column">You may inquire at the Catholic Parish Office of your municipality.</p>
				</article>
			</div>
 			<!-- Login Section -->
  			<div class="col-sm-6">
				<article class="footer_column">
					<h2 class="faq">An authorized staff of the Diocese of Cubao?</h2>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Log in using your credentials to access <br> certificates database and view statistics</h3>
						</div>
						<div class="panel-body">
							<?php echo validation_errors(); ?>
							<form accept-charset="UTF-8" role="form" action ="<?php echo base_url('index.php/Checklogin_controller'); ?>" method = "POST">
								<fieldset>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" placeholder="Username" name="username" type="text">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input class="form-control" placeholder="Password" name="password" type="password">
									</div>
									<br>
									<button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Log In</button>
								</fieldset>
							</form>
						</div>
					</div>
				</article>
			</div>
		</footer>
	</div>
	<!-- Footer Section -->
	<div class="row">	
		<section class="footer_banner" id="contact">
			<h2 class="hidden">Footer Banner Section </h2>
			<h2 class="hero_header">CONTACT DETAILS</h2>
			<p class="hero_body">
				Website: dioceseofcubao.ph
				<br>
				Phone: (02)723-5116
			</p>
			<br>
			<h2 class="hero_header">ABOUT THE DEVELOPERS</h2>
			<p class="hero_body">
				This web application was developed by students from the Department of Computer Science of the University of the Philippines Diliman.
				<br> 
				For inquiries about this web application, you may contact the developers at leandrodetorres23@gmail.com
			</p>
		</section>
	</div>
	<!-- Copyrights Section -->
	<div class="row">
		<div class="copyright">&copy;2017 - <strong>Group 1</strong></div>
	</div>
</div>
<!-- Main Container Ends -->
</body>
</html>