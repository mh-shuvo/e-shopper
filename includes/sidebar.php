	<?php
//$selectAllProduct=$objApplication->SelectAllPublishProduct();
$get_publish_catagory=$objApplication->getAllPublishCatagory();
$get_publish_manufacture=$objApplication->getAllPubblishManufacturer();
?>

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
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="./asset/front_asset/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>