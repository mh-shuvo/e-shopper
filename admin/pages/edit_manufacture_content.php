<?php
if(isset($_GET['id'])){
	$manufactureId = $_GET['id'];
	$manufactureInfo = $objSuperAdmin->getManufactureInfoById($manufactureId);
} 

if(isset($_POST['save_manufacture'])){
	if(!empty($_POST['manufacture_name']) &&!empty($_POST['manufacture_description'])){
		$message = $objSuperAdmin->update_manufacture($_POST);
	}
	else{
		$message="fill the all input field";	
	}
	
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
					<a href="#">Update Manufacture</a>
				</li>
			</ul>
		
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Manufacture Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="post" name="manufactureForm">
						  <fieldset>
						  	<h3><?php if(isset($message)){echo $message;} ?></h3>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Manufacture Name </label>
							  <div class="controls">
								<input type="text" name="manufacture_name" class="span6 typeahead" value="<?php echo $manufactureInfo['1']; ?>">
								<input type="hidden" name="manu_id" class="span6 typeahead" value="<?php echo $manufactureInfo['0']; ?>">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							 <label class="control-label" for="textarea2">Manufacture Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="manufacture_description"><?php echo $manufactureInfo['2']; ?></textarea>
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
							  <button type="submit" class="btn btn-primary" name="save_manufacture">Update Manufacture</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
			<script type="text/javascript">
				document.forms['manufactureForm'].elements['publication_status'].value='<?php echo $manufactureInfo['3']; ?>';
			</script>