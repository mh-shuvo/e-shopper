<?php
$catagory=$objSuperAdmin->getAllPubblishCatagory();
$manufacturer=$objSuperAdmin->getAllPubblishManufacturer();

if(isset($_POST['save_product'])){
	$message=$objSuperAdmin->save_product($_POST);
}
?>
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="admin_master.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="AddProduct.php">Add Product</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Product Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>
						  	<h3><?php if(isset($message)){echo $message;} ?></h3>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name </label>
							  <div class="controls">
								<input type="text" name="product_name" class="span6 typeahead">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Category Name</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
									<option>----Select Category-----</option>
									<?php while($allCatagory=mysqli_fetch_array($catagory)){?>
									<option value="<?php echo $allCatagory['0']; ?>"><?php echo $allCatagory['1']; ?></option>

									<?php } ?>
								  </select>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Manufacturer Name</label>
								<div class="controls">
								  <select id="selectError3" name="manufacturer_id">
								  	<option>----Select Manufacturer-----</option>
								  	<?php while($manufacturers=mysqli_fetch_array($manufacturer)){?>
									<option value="<?php echo $manufacturers['0']; ?>"><?php echo $manufacturers['1']; ?></option>
									<?php } ?>
									
								  </select>
								</div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Stock Quantity </label>
							  <div class="controls">
								<input type="number" name="stock_quantity" class="span6 typeahead">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product SKU </label>
							  <div class="controls">
								<input type="number" name="product_sku" class="span6 typeahead">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Price </label>
							  <div class="controls">
								<input type="number" name="product_price" class="span6 typeahead">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Product Picture</label>
							  <div class="controls">
								<input name="product_picture" class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>  

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="product_short_description"></textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="product_long_description"></textarea>
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError3">Publication Status</label>
								<div class="controls">
								  <select id="selectError3" name="publication_status">
									<option>----Select One-----</option>
									<option value="1">Publish</option>
									<option value="0">Unpublish</option>
								  </select>
								</div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="save_product">Save Product</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->