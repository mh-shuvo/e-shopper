<?php
 $orderId=0;
if(isset($_GET['id'])){
    $orderId += $_GET['id'];
    $select_order=$objSuperAdmin->getTotalOrderByOrderId($orderId);
    $customerInfo = $objSuperAdmin->getCustomerInfoByOrderId($orderId);
    $shippingInfo = $objSuperAdmin->getShippingInfoByOrderId($orderId);
    $productInfo = $objSuperAdmin->getProductInfoByOrderId($orderId);
    $paymentInfo = $objSuperAdmin->getPaymentInfoByOrderId($orderId);
     $total_order=mysqli_fetch_array($select_order);
     $sub_total=0;
    
}
/*if(isset($_POST['completeOrder'])){
    $objSuperAdmin->completeOrder($orderId);
}*/


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box" id="wrapper">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../asset/logo.png" style="width:auto; ">
                            </td>
                            
                            <td>
                                Invoice #: 00<br>
                                Created: <?php echo $total_order['5']; ?><br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                SS Technology Ltd.<br>
                                365/2 Trunk Road<br>
                                Feni Sadar Feni
                            </td>
                            
                            <td>
                                <?php echo $customerInfo['customer_name']; ?><br>
                                <?php echo $customerInfo['email']; ?><br>
                                <?php echo $customerInfo['address']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    <?php  
                        switch($paymentInfo['payment_type']){
                            case 'cash':
                            echo "#Cash";
                            break;
                            case 'bKash':
                            echo "#bKash";
                            break;
                            case 'dbbl':
                            echo "#DBBL";
                            break;
                            case 'card':
                            echo "#Credit Card";
                            break;
                        }

                    ?>
                </td>
            </tr>
            
            <tr class="details">
                <td>
                   
                </td>
                
             
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
                       <?php foreach($productInfo as $product){ ?> 
            <tr class="item">
                <td>
                    <?php echo $product['product_name']; ?>
                </td>
                
                <td>
                    <?php echo $product['product_price']; 
                    $sub_total=($product['product_price']*2)/100;
                    ?>
                </td>
            </tr>
            <?php } ?>
            
             <tr class="heading">
                <td>
                   VAT
                </td>
                
                <td>
                 <?php echo $sub_total;?>
                </td>
            </tr>
            <br>
               <tr class="heading">
                <td>
                   Shipping 
                </td>
                
                <td>
                 <?php
                 $dis= $shippingInfo['5'];
                 if(($dis=='dhaka')||($dis=='Dhaka')||($dis=='DHAKA')){
                    echo "50";
                 }
                 else{
                    echo "150";
                 }
                  ?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: BDT <?php 
                   echo $total_order['3']; ?>
                </td>
            </tr>
        </table>
    </div>
    <br>
  <div  class="container">
            <form method="post"  style="float: right; margin-right: 200px;">
                <input class="btn btn-success" type="submit" name="completeOrder" value="COMPLETE ORDER">
                <input class="btn btn-success" type="submit" id="print" name="print" value="PRINT INVOICE COPY"> 

            </form>
    </div> 




    <script>
  $(document).ready(function(){
      $("#print").click(function(){
        window.print();
        return false;
          var mode = 'iframe'; // popup
          var close = mode == "popup";
          var options = { mode : mode, popClose : close};
          $("#wrapper").printArea( options );
      });
      
  });

</script>
</body>
</html>

