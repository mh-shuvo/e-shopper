<?php 
if(isset($_POST['continue'])){
	$objApplication->saveShippingInfo($_POST);
}

?>

<section id="form" style="margin-top:20px !important;"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h1>Please give your shipping information</h1>
						<hr/>
						<form action="" method="post">
							<input name="full_name" type="text" placeholder="Full Name" required="true" />
							<input name="email_address" type="email_address" placeholder="Email Address" required="true"/>
							<input name="phone_number" type="text" placeholder="Phone Number" required="true"/>
							<input type="text" name="address" placeholder="Address" required="true">
							<input type="text" name="district" placeholder="District" required="true">

							<button name="continue" type="submit" class="btn btn-default pull-right">Continue</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->