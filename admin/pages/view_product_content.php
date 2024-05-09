<?php
$productId = $_GET['id']; 
$product = $objSuperAdmin->selectProductByProducutId($productId);
?>
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="manage_product.php">Product</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Product</a></li>
			</ul>

			<h3>
				<?php 
				if(isset($_SESSION['message']))
					{
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					} 
				?>
				
			</h3>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>View Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>Product Name</th>
								  <td><?php echo $product['product_name']; ?></td>
							  </tr>
							  <tr>
								  <th>Category Name</th>
								  <td><?php echo $product['category_name']; ?></td>
							  </tr>
							  <tr>
								  <th>Manufacturer Name</th>
								  <td><?php echo $product['manufacture_name']; ?></td>
							  </tr>
							  <tr>
								  <th>Product Quantity</th>
								  <td><?php echo $product['stock_quantity']; ?></td>
							  </tr>
							  <tr>
								  <th>Product SKU</th>
								  <td><?php echo $product['product_sku']; ?></td>
							  </tr>
							  <tr>
								  <th>Product Price</th>
								  <td><?php echo $product['product_price']; ?></td>
							  </tr>
							  <tr>
								  <th>Product Picture</th>
								  <td>
								  	<img src="<?php echo $product['product_picture']; ?>" height="200" width="150">
								  </td>
							  </tr>
							  <tr>
								  <th>Product Short Description</th>
								  <td><?php echo $product['product_short_description']; ?></td>
							  </tr>
							  <tr>
								  <th>Product Long Description</th>
								  <td><?php echo $product['product_long_description']; ?></td>
							  </tr>
							  <tr>
								  <th>Publication Status</th>
								  <td><?php echo ($product['publication_status'] == 1)?'Published':'Unpublished'; ?></td>
							  </tr>
						  </thead>
						  
					  </table>            
					</div>
				</div><!--/span-->