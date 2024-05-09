	<?php
	$allCustomer=$objSuperAdmin->selectallCustomer();
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
								  <th>Customer ID</th>
								  
								  <th>Customer Name</th>
								  <th>Mobile Number</th>
								  <th>Email Number</th>
								  <th>Address</th>
								  <th>District</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php while($customer=mysqli_fetch_array($allCustomer)){ ?>
							<tr>
								<td><?php echo $customer['0']; ?></td>
								<td class="center"><?php echo $customer['1']; ?></td>
								<td class="center"><?php echo $customer['2']; ?></td>
								<td class="center"><?php echo $customer['3']; ?></td>
								<td class="center"><?php echo $customer['5']; ?></td>
								<td class="center"><?php echo $customer['6']; ?></td>
							</tr>
							<?php } ?>
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->