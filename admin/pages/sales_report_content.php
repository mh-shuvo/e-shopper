	<?php
	$allSale=$objSuperAdmin->selectAllSale();
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
								  <th>Sale ID</th>
								  <th>Order ID</th>
								  <th>Customer Name</th>
								  <th>Customer Phone</th>
								  <th>Total Order</th>
								  <th>Order Date</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php while($sale=mysqli_fetch_array($allSale)){ ?>
							<tr>
								<td><?php echo $sale['0']; ?></td>
								<td class="center"><?php echo $sale['1']; ?></td>
								<td class="center"><?php echo $sale['2']; ?></td>
								<td class="center"><?php echo $sale['3']; ?></td>
								<td class="center"><?php echo $sale['4']; ?></td>
								<td class="center"><?php echo $sale['5']; ?></td>
							</tr>
							<?php } ?>
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->