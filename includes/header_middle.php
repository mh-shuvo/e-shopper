<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="./asset/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="contact_us.php"><i class="fa fa-user"></i>Contact us </a></li>
								<li><a href="about_us.php"><i class="fa fa-star"></i> About us</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if(isset($_SESSION['customer_name'])){ ?>
								<li><a href="check_out.php?status=logout"><i class="fa fa-lock"></i> Logout</a></li>
								<?php }else{
									?>
								<li><a href="check_out.php"><i class="fa fa-lock"></i> Login</a></li>

									<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->