<?php
ob_start(); 
session_start();
include('../classes/SuperAdmin.php');
$objSuperAdmin=new super_admin();

if($_SESSION['admin_id'] == null){
	header('Location:index.php');
}


if(isset($_GET['status'])){
	$status = $_GET['status'];

	if($status == 'logout'){
		$objSuperAdmin->admin_logout();	
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>E-Shopper Admin Panel</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Mehedi Hasan Shuvo">
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
	<!-- start: JEQUERY -->
	 <script src="../asset/back_asset/jquery/jquery.js" type="text/JavaScript" language="javascript"></script>
     <script src="../asset/back_asset/jquery/jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
	

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
	
		
		
		
</head>

<body>
		<?php include('./includes/admin_header.php');?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
			<?php include('./includes/admin_sidebar.php');?>
			<!-- start: Content -->
			<div id="content" class="span10">
			<?php 
			if(isset($page)){
				if($page=='catagory'){
					include './pages/catagory_content.php';
				}
				else if($page=='manage_catagory'){
					include './pages/manage_catagory_content.php';
				}
				else if($page=='manufacture'){
					include './pages/manufacture_content.php';
				}
				else if($page=='manage_manufacture'){
				    include './pages/manage_manufacture_content.php';
				}
				else if($page=='edit_catagory'){
				    include './pages/edit_catagory_content.php';
				}
				else if($page=='edit_manufacture'){
				include('./pages/edit_manufacture_content.php');
				}
				else if($page=='add_product'){
				include('./pages/add_product_content.php');
				}
				else if($page=='manage_product'){
				include('./pages/manage_product_content.php');
				}
				else if ($page=='edit_product') {
					include('./pages/edit_product_content.php');
				}
				else if($page=='view_product'){
					include('./pages/view_product_content.php');
				}
				else if($page=='manage_order'){
					include('./pages/manage_order_content.php');
				}
				else if($page=='order_details'){
					include('./pages/order_details_content.php');
				}
				else if($page=='invoice'){
					include('./pages/invoice_content.php');
				}
				else if($page=='order_report'){
					include('./pages/order_report_content.php');
				}
				else if($page=='sales_report'){
					include('./pages/sales_report_content.php');
				}
				else if($page=='customer_report'){
					include('./pages/customer_report_content.php');
				}
				else{
				include('./pages/dashboard_content.php');
				}
				

				


			}
			else{
				include('./pages/dashboard_content.php');
			}
			
			?>
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	
			
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			
	<div class="clearfix"></div>
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
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
