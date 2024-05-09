<?php
if(isset($_GET['id'])){
	$categoryId = $_GET['id'];
	$categoryInfo = $objSuperAdmin->getCategoryInfoById($categoryId);
} 
if(isset($_POST['update_category'])){
	$objSuperAdmin->update_catagory($_POST);
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
					<a href="#">Update Category</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>
						Update Catagory Information</h2>
					
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="post" name="categoryForm">
						  <fieldset>
						  	<h3><?php if(isset($message)){echo $message;} ?></h3>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category Name </label>
							  <div class="controls">
								<input type="text" name="category_name" class="span6 typeahead" value="<?php echo $categoryInfo['1'];?>">
								<input type="hidden" name="category_id" value="<?php echo $categoryInfo['0']; ?>">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="category_description"><?php echo $categoryInfo['2'];?></textarea>
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
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="update_category">Update Manufacturer</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			<script type="text/javascript">
				document.forms['categoryForm'].elements['publication_status'].value='<?php echo $categoryInfo['3']; ?>';
			</script>