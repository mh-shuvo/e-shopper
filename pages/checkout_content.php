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
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="" method="post">
							<input name="name" type="text" placeholder=" Name" required="true" />
							<input name="phone_number" type="text" placeholder="Phone Number" required="true"/>
							<input name="email_address" type="email" placeholder="Email Address" required="true"/>
							<input name="password" type="password" placeholder="Password" required="true"/>
							<input type="text" name="address" placeholder="Address" required="true">
							<input type="text" name="district" placeholder="District" required="true">
							<button id="signup" name="signup" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						

						<form action="" method="post">
							<input type="email" placeholder="Email Address" name="email_address" />
							<input type="password" placeholder="Password" name="password" />

							<button name="customer_login" type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form- -->


