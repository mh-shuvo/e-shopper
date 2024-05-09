	<?php
	$all_order=$objSuperAdmin->selectAllOrder();
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
								  <th>Customer Name</th>
								  <th >Phone Number</th>
								  <th>Order Status</th>
								  <th>Order Total</th>
								  <th>Order Date</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php while($order=mysqli_fetch_array($all_order)){?>
							<tr>
								<td class="center"><?php echo $order['order_id']; ?></td>
								<td class="center"><?php echo $order['full_name']; ?></td>
								<td class="center" ><?php echo '0'.$order['phone']; ?></td>
								<td class="center"><?php echo $order['order_status']; ?></td>
								<td class="center" ><?php echo $order['total_order']; ?></td>
								<td class="center" ><?php echo $order['order_date']; ?></td>
								<td class="center">
								<a title="View Order Details" class="btn btn-info" href="order_details.php?id=<?php echo $order['order_id']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>

									<a title="View Invoice Details" class="btn btn-info" href="invoice.php?id=<?php echo $order['order_id']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a title="Delete Order" onclick="return confirm('Are you sure?')" class="btn btn-danger" href="delete_action.php?id=<?php echo $order['order_id']; ?>">
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