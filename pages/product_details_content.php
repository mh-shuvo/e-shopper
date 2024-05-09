<?php
$productId=$_GET['id'];
$product = $objApplication->getProductInfoById($productId);
$get_publish_catagory=$objApplication->getAllPublishCatagory();
$get_publish_manufacture=$objApplication->getAllPubblishManufacturer();
$related_product=$objApplication->getRelatedProductByCategoryId($product['7'],$productId);
if (isset($_POST['add_to_cart'])) {
	$objApplication->addProductToCart($_POST);
}
if (isset($_POST['add_to_cart_rel_pdt'])) {
	$objApplication->addProductToCart($_POST);
}
if(isset($_POST['save_cmnt'])){
	if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['message'])){
		$objApplication->save_cmnt($_POST);
	}
	else{
		echo "<script>alert('Plz fill all input field')</script>";
	}
}

?>
	
	<section>
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
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="./asset/<?php echo $product['3']; ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
							

							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="./asset/front_asset/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $product['1']; ?></h2>
<!--								<p>Product ID: 9090--><?php //echo $product['0'];?><!--</p>-->
								<span>
									<span>BDT <?php echo $product['2'];?></span> <br>

									<label>Quantity:</label>
									<form method="post">
									<input type="text" value="1" name="quantity" />
									<input type="hidden" name="pdtId" value="<?php echo $product['0']; ?>">
									<button type="submit" class="btn btn-fefault cart" name="add_to_cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
									</form>
								</span>
								<p><b>Category:</b> <?php echo $product['5'];?></p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> <?php echo $product['4'];?></p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
						<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab"><b style="color:white"><?php echo $product['1'];?></b>  Details</a></li>
								<li><a href="#related_product" data-toggle="tab">Related Product</a></li>
								
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews </a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<?php echo $product['6'];?>
								
							</div>
							
							<div class="tab-pane fade" id="related_product" >
								<?php
									while ($pdt=mysqli_fetch_array($related_product)) {
										
									
								?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<form method="post">
											<input type="hidden" value="1" name="quantity" />
											<input type="hidden" name="pdtId" value="<?php echo $pdt['0']; ?>">
										<div class="single-products">
											<div class="productinfo text-center">
												<a href="product_details.php"><img src="./asset/<?php echo $pdt['product_picture']; ?>" alt="" height="200"
												width="70" /></a>
												<h2><?php echo $pdt['product_price']; ?></h2>
												<p><?php echo $pdt['product_name']; ?></p>
												<button type="submit" name="add_to_cart_rel_pdt" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
										</form>
									</div>
								</div>	
								<?php } ?>
									
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
								
									<p><b>Write Your Comment</b></p>
									
									<form action="#" method="post" >
										<span>
											<input type="text" name="name" placeholder="Your Name"/>
											<input type="email" name="email" placeholder="Email Address"/>
											<input type="hidden" name="pdt_id" value="<?php echo $product['0']; ?>">
											<input type="hidden" name="pdt_name" value="<?php echo $product['1']; ?>">
										</span>
										<textarea name="message"></textarea>
										
										<button type="submit" class="btn btn-default pull-right"  name="save_cmnt">
											Submit
										</button>

									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/front_asset/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/front_asset/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/front_asset/images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
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
													<img src="./asset/front_asset/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/front_asset/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="./asset/front_asset/images/home/recommend3.jpg" alt="" />
													<h2></h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
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
	</section>
