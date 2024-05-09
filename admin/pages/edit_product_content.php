<?php

if(isset($_GET['id'])){
	$product_id=$_GET['id'];	
	$productInfo=$objSuperAdmin->getproductInfoById($product_id);
}
if(isset($_POST['update_product'])){
	
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
					<a href="AddProduct.php">Update Product</a>
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
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" name="productForm">
						  <fieldset>
						  	<h3><?php //if(isset($message)){echo $message;} ?></h3>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name </label>
							  <div class="controls">
								<input type="text" name="product_name" class="span6 typeahead" value="<?php echo $productInfo['1']; ?>">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Category Name</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
									<option>----Select Category-----</option>
									
									<option value=""></option>
								  </select>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Manufacturer Name</label>
								<div class="controls">
								  <select id="selectError3" name="manufacturer_id">
								  	<option>----Select Manufacturer-----</option>
								  
									<option value="<?php echo $manufacturers['0']; ?>">
									
								  </select>
								</div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Stock Quantity </label>
							  <div class="controls">
								<input type="number" name="stock_quantity" class="span6 typeahead" value="<?php echo $productInfo['4']; ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product SKU </label>
							  <div class="controls">
								<input type="number" name="product_sku" class="span6 typeahead" value="<?php echo $productInfo['5']; ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Price </label>
							  <div class="controls">
								<input type="number" name="product_price" class="span6 typeahead" value="<?php echo $productInfo['6']; ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Product Picture</label>
							  <div class="controls">
								<input name="product_picture" class="input-file uniform_on" id="fileInput" type="file" value="<?php echo $productInfo['7']; ?>">
							  </div>
							</div>  

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="product_short_description"><?php echo $productInfo['8']; ?></textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="product_long_description">"<?php echo $productInfo['9']; ?></textarea>
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
							  <button type="submit" class="btn btn-primary" name="update_product">Update Product</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
			<script type="text/javascript">
				document.forms['productForm'].elements['publication_status'].value='<?php echo $productInfo['10']; ?>';
			</script>