<?php 
$manuId = $_GET['id'];
$products ="";
$products = $objApplication->getProductByManufactureId($manuId);
$get_publish_catagory=$objApplication->getAllPublishCatagory();
$get_publish_manufacture=$objApplication->getAllPubblishManufacturer();

?>


<section id="advertisement">
		<div class="container">
			<img src="./assets/front_assets/images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
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
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php while($data=mysqli_fetch_array($get_publish_manufacture)){
												$total_product=5;
											/*$total_product=$objApplication->get_publish_total_productByManuId($data['0']);*/
										?>
									<li><a href="manufacture.php?id=<?php echo $data['0']; ?>"> <span class="pull-right">(<?php echo $total_product; ?>)</span><?php echo $data['1']; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="./assets/front_assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php foreach($products as $product){ ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img height="200" width="200" src="./assets/<?php echo $product['product_picture']; ?>" alt="" />
										<h2>BDT <?php echo $product['product_price']; ?></h2>
										<p><?php echo $product['product_name']; ?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>BDT <?php echo $product['product_price']; ?></h2>
											<p><?php echo $product['product_name']; ?></p>
											<a href="product_details.php?id=<?php echo $product['product_id']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product Details</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>

						<?php } ?>
						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>