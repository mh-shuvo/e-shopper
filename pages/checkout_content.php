<?php
if(isset($_GET['status'])){
	if($_GET['status']=='logout'){
		$objApplication->logoutCustomer();
	}
} 
if(isset($_POST['signup'])){
	$objApplication->signupCustomer($_POST);
}

if(isset($_POST['customer_login'])){
	$message = $objApplication->customerLoginToShipping($_POST);
}


?>

<section id="form" style="margin-top:20px !important;"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="" method="post">
							<input type="text" placeholder="Phone" name="phone" />

							<button name="customer_login" type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form- -->


