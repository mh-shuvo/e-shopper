<?php
	$get_publish_catagory=$objApplication->getAllPublishCatagory();
?>
<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse" >
								<li><a href="index.php" class="active">Home</a></li>
								<?php while($get_catagory_name=mysqli_fetch_array($get_publish_catagory)){ ?>
								<li><a href="catagory.php?catagory_id=<?php echo $get_catagory_name['0']; ?>" class="active"><?php echo $get_catagory_name['1']; ?></a></li>
								<?php
									}
								?>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->

