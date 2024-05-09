	<?php
$sessionId=session_id();

if(isset($_GET['id'])){
	$tempCartId = $_GET['id'];
	$objApplication->deleteTempCartById($tempCartId);
}

$getCartProduct=$objApplication->selectCartProductsBySessionId($sessionId);
if(isset($_POST['quantity_update'])){
	$objApplication->updateCartProductQuantityByCartId($_POST);
}
	?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$subtotal=0;
						 while($cartProduct=mysqli_fetch_array($getCartProduct)){ 
							
							?>
						<tr>

							<td class="cart_product">
								<a href=""><img src="./asset/<?php echo $cartProduct['5']; ?>" alt="" height="100px" width="100px"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $cartProduct['3'];?></a></h4>
								<p>Product ID:<?php echo $cartProduct['2'];?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $cartProduct['4'];?></p>
							</td>
							<td class="cart_quantity">
								<form method="post">
								<div class="cart_quantity_button">
									<!-- <a class="cart_quantity_up" href=""> + </a> -->
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $cartProduct['6'];?>" autocomplete="off" size="2">
										<input type="hidden" name="temp_cart_id" value="<?php echo $cartProduct['0']; ?>">
										<button type="submit" name="quantity_update" class="cart_quantity_down"> <i class="fa fa-chevron-circle-up"></i> </button>	
									<!-- <a class="cart_quantity_down" href=""> - </a> -->
								</div>
								</form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
										$total=$cartProduct['4']*$cartProduct['6'];
										echo $total;
										$subtotal+=$total;
										
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="?id=<?php echo $cartProduct['temp_cart_id']; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo $subtotal; ?></span></li>
							<li>Eco Tax <span><?php echo $vattotal = ($subtotal/100)*2; ?></span></li>
							<li>Total <span><?php echo $grandtotal = $subtotal+$vattotal; $_SESSION['order_total']=$grandtotal;?></span></li>
						</ul>
							<a class="btn btn-default update" style="float: left;" href="index.php">Continue Shopping</a>
							
							<?php 
				$shippingId = isset($_SESSION['shipping_id']);
				$customerId = isset($_SESSION['customer_id']);

				if($shippingId == NULL && $customerId == NULL){
					?>
					<a href="check_out.php" class="btn btn-primary pull-right">Checkout</a>
					<?php
				}elseif($customerId != NULL && $shippingId == NULL){
					?>
					<a href="shipping.php" class="btn btn-primary pull-right">Checkout</a>
					<?php
				}elseif($customerId != NULL && $shippingId != NULL){
					?>
					<a href="payment.php" class="btn btn-primary pull-right">Checkout</a>
					<?php
				}

				?>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->