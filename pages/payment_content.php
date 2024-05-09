<?php 
if(isset($_POST['complete_order'])){
	$objApplication->completeCustomerOrder($_POST);
}
@ $district=$_SESSION['shipping_district'];
$order_total=$_SESSION['order_total'];
$total_amount=$order_total;
// if($district=='dhaka'||$district=='Dhaka'){
// 	$total_amount=$order_total+50;
// }
// else{
// 	$total_amount=$order_total+150;
// }
?>


<section id="form" style="margin-top:20px !important;"><!--form-->
		<div class="container">
			<div class="col-md-12" style="background-color: #efefef; border: 1px solid #CDCDCD"><h3 style="float: left;">Add Your Payment Method</h3><h3 style="float: right;">Your Payable amount:<span style="color: red;"> TK.<?php echo $total_amount; ?></span></h3>
			</div>
					
	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-success">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#cart" data-toggle="tab" ><span class="fa fa-credit-card" style="font-size: 25px;"></span>  CARD PAYMENT</a></li>
                            <li><a href="#cash" data-toggle="tab" ><span class="fa fa-money" style="font-size: 25px;"></span>  CASH ON DELIVERY</a></li>
                            <li><a href="#mobile" data-toggle="tab" ><span class="fa fa-mobile" style="font-size: 25px;"></span>  MOBILE PAYMENT</a></li>
                            <li><a href="#internet" data-toggle="tab" ><span class="fa fa-money" style="font-size: 25px;"></span>  INTERNET PAYMENT</a></li>
                              </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="cart">
                        	
                        	<center>
                        		<h1 style="color:green">Sorry our facility is not yet operational.</h1>
                        	</center>
                        </div>
                        <div class="tab-pane fade" id="cash">
                        	<div class="col-md-4">
                        		<h4>How to pay</h4>
                        		<br>
                        		<p style="font-size: 16px;">
                        			1. Click on "Confirm Order".<br>
									2. Your order will be placed immediately.<br>
									3. You will get the parcel of happiness within 3-5 working<br> 
									days(in Dhaka).<br>
									4. After receiving the parcel, pay to the delivery man.<br>
									* If you have any problem with the parcel, you can easily return
									<br> that product through <a>Happy Return Policy</a>.
                        		</p>
                        	</div>
                        	<div class="col-md-8">
                        		<h2>CASH ON DELIVERY</h2>
                        		<p style="margin-top: 20px; font-size: 14px">Pay with cash when your order is delivered</p>
                        		<h3>Your Payable Amount <span style="color: red;"> TK.<?php echo $total_amount; ?></span></h3>
                        		<br>
                        		<p>
                        			(Some of your ordered products might be unavailable on suppliers end. We apologize for the inconvenience. We hope that you will consider that situation with a positive attitude.)<input type="checkbox" name="">
									I agree to the <a>Terms of Use</a> and <a>Privacy Policy</a>
                        		</p>
                        		<form method="post" name="cash">
                        			<input type="hidden" name="payment_type" value="cash">
                        			<input type="submit" name="complete_order" class="btn btn-primary btn-lg btn-block" >
                        			</form>
                        	</div>
                        </div>
                        <div class="tab-pane fade" id="mobile">
                        		<div class="col-md-4">
                        		<h4>How to pay</h4>
                        		<br>
                        		<p style="font-size: 16px;" id="bkash">
                        			1 Step 1: Go to your bKash Mobile Menu by dialing <br>
                        			  *247#
									2  Step 2: Select Payment option: 3<br>
									3  Step 3: Enter E- Shopper bKash <br>
									4  Account Number: 01917423680<br>
									5  Step 4: Enter the amount you have to pay: 541
									6  Step 5: Enter a reference against your <br>
									 	payment: 729816<br>
									7  Step 6: Enter the Counter Number: 1<br>
									8  Step 7: Now enter your PIN to confirm: XXXX<br>
									9  After entering PIN, you will get the <br>
									   confirmation SMS with a Transaction ID <br>
									   (TrxID). Put this Transaction ID (TrxID) into <br>
									    the 'Transaction Id' box. Then click the button <br>
									    "Confirm Order".<br>
									10  If you want to pay with dbbl then go to your DBBL Menu
										by dialing *322#. 
										then same to step 2-9 but change E-Shopper DBBL number
										01917423680
                        		</p>
                        	</div>
                        	<div class="col-md-8">
                        		<h2>MOBILE PAYMENT</h2>	<form method="post" name="mobile">
                        		<select name="payment_type" style="height: 50px; width: 400px;font-size: 20px; background: none; border: 1px solid #d2cdcd; cursor: pointer;">
                        			<option value="bKash">bKash</option>
                        			<option value="dbbl">DBBL</option>
                        		</select>
                        		<br><br>
                        		<input type="number" name="transaction_number" placeholder="Transaction ID" style="height: 50px; width: 400px;font-size: 20px; background: none; border: 1px solid #d2cdcd;">
                        		
                        		<h3>Your Payable Amount <span style="color: red;"> TK.<?php echo $total_amount; ?></span></h3>
                        		<br>
                        		<p>
                        			(Some of your ordered products might be unavailable on suppliers end. We apologize for the inconvenience. We hope that you will consider that situation with a positive attitude.)<input type="checkbox" name="">
									I agree to the <a>Terms of Use</a> and <a>Privacy Policy</a>
                        		</p>
                        	
                        			
                        			<input type="submit" name="complete_order" class="btn btn-primary btn-lg btn-block" >
                        			</form>
                        	</div>
                        </div>
                        <div class="tab-pane fade" id="internet">
                        	<center>
                        		<h1 style="color:green">Sorry our facility is not yet operational.</h1>
                        	</center></div>
                    </div>
                </div>
            </div>
        </div>
	</div>

<br/>
					<!-- 	<form action="" method="post">

							<table width="100%" class="table-bordered">
								<tr>
									<td><input name="payment_type" type="radio" required="true" value="cash_on_delivery"/> </td>
									<td><h2>Cash on delivery</h2></td>
								</tr>
								<tr>
									<td><input name="payment_type" type="radio" required="true" value="bKash"/></td>
									<td><h2>bKash</h2></td>
								</tr>
								<tr>
									<td><input name="payment_type" type="radio" required="true" value="paypal"/></td>
									<td><h2>Paypal</h2></td>
								</tr>
								<tr>
									<td colspan="2"><button name="complete_order" type="submit" class="btn btn-default pull-right">Complete Order</button></td>
								</tr>
							</table>

							
						</form> -->
			
		</div>
	</section><!--/form-->

	<style type="text/css">
		/********************************************************************/
/*** PANEL SUCCESS ***/
.with-nav-tabs.panel-success .nav-tabs > li > a,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #5FB0E4;
	font-size: 20px
}
.with-nav-tabs.panel-success .nav-tabs > .open > a,
.with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: white;
	background-color: #d6e9c6;
	border-color: transparent;
	border-radius: 10px;
}
.with-nav-tabs.panel-success .nav-tabs > li.active > a,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
	color: black;
	background-color: #fff;
	border-color: #d6e9c6;
	border-bottom-color: transparent;

	border-radius: 10px;
}

	</style>