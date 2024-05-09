	<?php
	$allManufacture=$objSuperAdmin->selectAllManufacture();
	?>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="admin_master.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Manufacture Management</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manufacture Management</h2>
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
								  <th>SL</th>
								  <th>Manufacture Name</th>
								  <th >Manufacture Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php while($data=mysqli_fetch_array($allManufacture)){?>
							<tr>
								<td><?php echo $data['0']; ?></td>
								<td class="center"><?php echo $data['1']; ?></td>
								<td class="center" style="max-width: 400px;"><?php echo $data['2']; ?></td>
								<td class="center">
									<?php
									if($data['3']==1){
									?>
									<span class="label label-success">Published</span>
									<?php
										}
										else{
									?>
									<span class="label label-primary">Unpublished</span>
									<?php
										}
									?>
								</td>
								<td class="center">
									<?php if($data['publication_status'] == 0){ ?>
									<a class="btn btn-success" href="manufacture_action.php?status=publish&&id=<?php echo $data['0']; ?>">
										<i class="halflings-icon white arrow-up"></i>  
									</a>
									<?php } ?>

									<?php if($data['publication_status'] == 1){
										?>
										<a class="btn btn-danger" href="manufacture_action.php?status=unpublish&&id=<?php echo $data['0']; ?>">
										<i class="halflings-icon white arrow-down"></i>  
									</a>

										<?php
											} 
										?>

									<a class="btn btn-info" href="edit_manufacture.php?id=<?php echo $data['0']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="manufacture_action.php?status=delete&&id=<?php echo $data['0']; ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							
							</tr>
							<?php } ?>
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->