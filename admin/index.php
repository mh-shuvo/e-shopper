<?php
session_start();
include('../classes/Admin_info.php');
$objAdmin = new Admin();
$objAdmin->checkSomeoneIsAlreadyLogin();

if(isset($_POST['login'])){
	$message = $objAdmin->admin_login_check($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Login To E-Shopper Admin Panel</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Mehedi Hasan">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../asset/back_asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="../asset/back_asset/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../asset/back_asset/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../asset/back_asset/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="../asset/back_asset/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="../asset/back_asset/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="../asset/back_asset/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(../asset/back_asset/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.php"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<center><h1>Login to your account</h1></center>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email" id="username" type="text" placeholder="type useremail"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix">
								<h3 style="color: red; text-align: center;">
									<!-- Don't match User Email and Password	 -->
								</h3>
							</div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary" name="login">Login</button>
							</div>
							<div class="clearfix">
							
							</div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="../asset/back_asset/js/jquery-1.9.1.min.js"></script>
	<script src="../asset/back_asset/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.ui.touch-punch.js"></script>
	
		<script src="../asset/back_asset/js/modernizr.js"></script>
	
		<script src="../asset/back_asset/js/bootstrap.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.cookie.js"></script>
	
		<script src='../asset/back_asset/js/fullcalendar.min.js'></script>
	
		<script src='../asset/back_asset/js/jquery.dataTables.min.js'></script>

		<script src="../asset/back_asset/js/excanvas.js"></script>
	<script src="../asset/back_asset/js/jquery.flot.js"></script>
	<script src="../asset/back_asset/js/jquery.flot.pie.js"></script>
	<script src="../asset/back_asset/js/jquery.flot.stack.js"></script>
	<script src="../asset/back_asset/js/jquery.flot.resize.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.chosen.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.uniform.min.js"></script>
		
		<script src="../asset/back_asset/js/jquery.cleditor.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.noty.js"></script>
	
		<script src="../asset/back_asset/js/jquery.elfinder.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.raty.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.iphone.toggle.js"></script>
	
		<script src="../asset/back_asset/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.gritter.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.imagesloaded.js"></script>
	
		<script src="../asset/back_asset/js/jquery.masonry.min.js"></script>
	
		<script src="../asset/back_asset/js/jquery.knob.modified.js"></script>
	
		<script src="../asset/back_asset/js/jquery.sparkline.min.js"></script>
	
		<script src="../asset/back_asset/js/counter.js"></script>
	
		<script src="../asset/back_asset/js/retina.js"></script>

		<script src="../asset/back_asset/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
