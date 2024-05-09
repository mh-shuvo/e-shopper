<?php
$selectAllProduct=$objApplication->SelectAllPublishProduct();
$get_publish_catagory=$objApplication->getAllPublishCatagory();
$get_publish_manufacture=$objApplication->getAllPubblishManufacturer();
?>

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Welcome to E-Shopper</h2>
									<p>e-shopper.com does not just sell lifestyle products, E-shopper.com is here to become a lifestyle!</p>
									
								</div>
								<div class="col-sm-6">
									<img src="./asset/front_asset/images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="./asset/front_asset/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>it is best online shopping center in bangladesh</h2>
									<p>e-shopper has the widest selection of popular second hand items all over Bangladesh, which makes it easy to find exactly what you are looking for. So if you're looking for a car, mobile phone, house, computer or maybe a pet, you will find the best deal on e-shopper. </p>
									
								</div>
								<div class="col-sm-6">
									<img src="./asset/front_asset/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="./asset/front_asset/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Available Category and Brand</h2>
									<p>e-shopper does not specialize in any specific category - here you can buy and sell items in more than 50 different categories. We also carefully review all ads that are being published, to make sure the quality is up to our standards</p>
									
								</div>
								<div class="col-sm-6">
									<img src="./asset/front_asset/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="./asset/front_asset/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php while($get_catagory_name=mysqli_fetch_array($get_publish_catagory)){ ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory.php?catagory_id=<?php echo $get_catagory_name['0']; ?>""><?php echo $get_catagory_name['1']; ?></a></h4>
								</div>
							</div>
							<?php
									}
								?>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php while($data=mysqli_fetch_array($get_publish_manufacture)){
												$total_product=" ";
											/*$total_product=$objApplication->get_publish_total_productByManuId($data['0']);*/
										?>
									<li><a href="manufacture.php?id=<?php echo $data['0']; ?>"> <span class="pull-right"><!-- (<?php echo $total_product; ?>) --></span><?php echo $data['1']; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div><!--/brands_products-->
					
						<div class="shipping text-center"><!--shipping-->
							<img src="./asset/front_asset/images/home/shipping copy.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php
						while($publishedProduct=mysqli_fetch_array($selectAllProduct)){
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="height: 200px; width: 200px;" src="./asset/<?php echo $publishedProduct['7']; ?>" alt="" />
											<h2><?php echo $publishedProduct['6']; ?></h2>
											<p><?php echo $publishedProduct['1']; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $publishedProduct['6']; ?></h2>
												<p><?php echo $publishedProduct['1']; ?></p>
												<a href="product_details.php?id=<?php echo $publishedProduct['0'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product Details</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<?php } ?>
					</div><!--features_items-->
					
				
					
					<div class="recommended_items"><!--Top_Brand Name-->
						<h2 class="title text-center">Features Brand</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/image/brand_image/easy.jpg" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/image/brand_image/hp.jpg" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/image/brand_image/symphony.png" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/image/brand_image/samsung.png" alt="" />
												<!-- 	<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/image/brand_image/color.png" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/image/brand_image/arong.png" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>