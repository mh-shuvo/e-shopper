	<?php
	$selectOrder=$objSuperAdmin->selectAllOrder();
	?>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="admin_master.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Order Report</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Order Report</h2>
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
								  <th>Order ID</th>
								  <th>Customer Name</th>
								  <th>Total Order</th>
								  <th>Order Date</th>
								
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php while($order=mysqli_fetch_array($selectOrder)){ ?>
							<tr>
								<td><?php echo $order['order_id']; ?></td>
								<td class="center"><?php echo $order['full_name']; ?></td>
								<td class="center"><?php echo $order['total_order']; ?></td>
								<td class="center"><?php echo $order['order_date']; ?></td>
								
								<td class="center">
									<?php
									if($order['order_status']=='complete'){
									?>
									<span class="label label-success">Complete</span>
									<?php
										}
										else{
									?>
									<span class="label label-primary">Pending</span>
									<?php
										}
									?>
								</td>
								<td class="center">
									<?php if($order['order_status'] == 'Pending'){ ?>
									<a class="btn btn-success" href="report_action.php?status=order&id=<?php echo $order['order_id'];?>">
										<i class="halflings-icon white arrow-up"></i>  
									</a>
									<?php } else { 
											echo "OK";
										?>
										  
									</a>

										<?php
											} 
										?>
								</td>

							
							</tr>
							<?php } ?>
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->