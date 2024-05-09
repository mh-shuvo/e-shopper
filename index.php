<?php
ob_start();
session_start(); 
	include('./classes/Application.php');
	$objApplication=new Application();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="./asset/front_asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="./asset/front_asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="./asset/front_asset/css/prettyPhoto.css" rel="stylesheet">
    <link href="./asset/front_asset/css/price-range.css" rel="stylesheet">
    <link href="./asset/front_asset/css/animate.css" rel="stylesheet">
	<link href="./asset/front_asset/css/main.css" rel="stylesheet">
	<link href="./asset/front_asset/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./asset/front_asset/js/html5shiv.js"></script>
    <script src="./asset/front_asset/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="./asset/front_asset/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./asset/front_asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./asset/front_asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./asset/front_asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./asset/front_asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php
		include('./includes/header_top.php');
		include('./includes/header_middle.php');
		include('./includes/header_bottom.php');
		?>
	</header><!--/header-->
	
	<section><!--main content start-->
		<?php 
		if(isset($page)){
				
				 if($page=='cart'){
				include('./pages/cart_content.php');
			}
				else if($page=='contact_us'){
				include('./pages/contact_us_content.php');
			}
			else if($page=='product_details'){
				include('./pages/product_details_content.php');
			}
			else if($page=='checkout'){
				include('./pages/checkout_content.php');
			}
			else if($page=='catagory'){
				include('./pages/catagory_content.php');
			}
				else if($page=='manufacture'){
				include('./pages/manufacture_content.php');
			}
			else if($page=='shipping'){
				include('./pages/shipping_content.php');
			}
			else if($page=='payment'){
				include('./pages/payment_content.php');
			}
			else if($page=='about'){
				include('./pages/about_content.php');
			}
			else if($page=='bye'){
				include('./pages/bye_content.php');
			}

			
		}
		else{
				include('./pages/home_content.php');
			}

		?>
	</section><!--main content end-->
	
	<footer id="footer"><!--Footer-->
	<?php
	include('./includes/footer_top.php');
	include('./includes/footer_widget.php');
	include('./includes/footer_bottom.php');
	?>
		
		
		
	
	</footer><!--/Footer-->
	

  
    <script src="./asset/front_asset/js/jquery.js"></script>
	<script src="./asset/front_asset/js/bootstrap.min.js"></script>
	<script src="./asset/front_asset/js/jquery.scrollUp.min.js"></script>
	<script src="./asset/front_asset/js/price-range.js"></script>
    <script src="./asset/front_asset/js/jquery.prettyPhoto.js"></script>
    <script src="./asset/front_asset/js/main.js"></script>
</body>
</html>