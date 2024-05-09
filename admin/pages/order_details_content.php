<?php 
if(isset($_GET['id'])){
    $orderId = $_GET['id'];
    $customerInfo = $objSuperAdmin->getCustomerInfoByOrderId($orderId);
    $shippingInfo = $objSuperAdmin->getShippingInfoByOrderId($orderId);
    $productInfo = $objSuperAdmin->getProductInfoByOrderId($orderId);
    $paymentInfo = $objSuperAdmin->getPaymentInfoByOrderId($orderId);
    $orderDetails = $objSuperAdmin->getSinlgeOrderDetails($orderId);
}
?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Order details info goes here</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
            
        
        <div class="box-content">
            <h1 style="color: green;">Customer Information</h1>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                    <th>Customer Name</th>
                    <td><?php echo $customerInfo['customer_name']; ?></td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td><?php echo $customerInfo['email']; ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $customerInfo['address']; ?></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><?php echo $customerInfo['phone']; ?></td>
                </tr>
                <tr>
                    <th>Home District</th>
                    <td><?php echo $customerInfo['district']; ?></td>
                </tr>
            </table>  

            <div style="display:none">
            <h1 style="color: green;">Shipping Information</h1>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                    <th>Name</th>
                    <td><?php echo $shippingInfo['full_name']; ?></td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td><?php echo $shippingInfo['email']; ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $shippingInfo['address']; ?></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><?php echo $shippingInfo['phone']; ?></td>
                </tr>
                <tr>
                    <th>Home District</th>
                    <td><?php echo $shippingInfo['district']; ?></td>
                </tr>
            </table>   
            </div>         

            <h1 style="color: green;">Product Information</h1>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                    <th>Serial</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                </tr>
               <?php $i=0; foreach($productInfo as $product){ $i++ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $product['product_name']; ?></td>
                    <td>
                        <img src="<?php echo $product['product_image']; ?>" width="50" height="50">
                    </td>
                    <td>BDT <?php echo $product['product_price']; ?></td>
                    <td><?php echo $product['product_quantity']; ?></td>
                    <td>BDT <?php echo $product['product_price']*$product['product_quantity']; ?></td>
                </tr>
                <?php } ?>
               
            </table>
            <h1 style="color: green;">General Information</h1>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                    <th>Order Status</th>
                    <td style="color:<?php echo $orderDetails['order_status'] == 'complete' ? "green":"red"?>"><?php echo ucfirst($orderDetails['order_status']); ?></td>
                </tr>
                <tr>
                    <th>Payment Type</th>
                    <td><?php echo ucfirst($paymentInfo['payment_type']); ?></td>
                </tr>
                <tr>
                    <th>Payment Status</th>
                    <td style="color:<?php echo $paymentInfo['payment_status'] == 'complete' ? "green":"red"?>"><?php echo ucfirst($paymentInfo['payment_status']); ?></td>
                </tr>
            </table>
            <?php 
                if($orderDetails['order_status'] != 'complete'){
            ?>     
            <center>
                <form method="post">
                    <input class="btn btn-success" type="submit" name="completeOrder" value="COMPLETE ORDER">
                </form>       
            </center>
            <?php } ?>
        </div>
    </div><!--/span-->
</div>