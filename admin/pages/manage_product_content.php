<?php 
$allProducts = $objSuperAdmin->selectAllProducts();

?>
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="manage_product.php">Product</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Manage Product</a></li>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manage Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Serial</th>
								  <th>Product Name</th>
								  <th>Category Name</th>
								  <th>Manufacturer Name</th>
								  <th>Stock Quantity</th>
								  <th>Product Price</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>
						  	<?php 
						  	while($data = mysqli_fetch_array($allProducts)){ ?>
							<tr>
								<td><?php echo $data['product_id']; ?></td>
								<td class="center"><?php echo $data['product_name']; ?></td>
								<td class="center"><?php echo $data['category_name']; ?></td>
								<td class="center"><?php echo $data['manufacture_name']; ?></td>
								<td class="center"><?php echo $data['stock_quantity']; ?></td>
								<td class="center"><?php echo $data['product_price']; ?></td>
								<td class="center">
								<?php 
								if($data['publication_status'] == 1){
								?>

									<span class="label label-success">Published</span>
								<?php
								}else{
								?>
									<span class="label label-danger">Unpublished</span>
								<?php
								} 
								?>
									
									
								</td>
								<td class="center">
									<?php if($data['publication_status'] == 0){ ?>
									<a class="btn btn-success" href="product_action.php?product=publish&&id=<?php echo $data['product_id']; ?>">
										<i class="halflings-icon white arrow-up"></i>  
									</a>
									<?php } ?>

									<?php if($data['publication_status'] == 1){
										?>
										<a class="btn btn-danger" href="product_action.php?product=unpublish&&id=<?php echo $data['product_id']; ?>">
										<i class="halflings-icon white arrow-down"></i>  
									</a>

										<?php
										} ?>

									<a class="btn btn-info" href="view_product.php?id=<?php echo $data['product_id']; ?>">
										<i class="halflings-icon white view"></i>  
									</a>
									<a class="btn btn-info" href="edit_product.php?id=<?php echo $data['product_id']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="product_action.php?product=delete&&id=<?php echo $data['product_id']; ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->