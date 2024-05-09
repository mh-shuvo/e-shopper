<?php
include('DB_connect.php');
class Application extends database_connection
{
	
	public function __construct()
	{
		parent:: __construct();
	}

	public function getAllPublishCatagory(){
		$sql="SELECT * FROM `category_info` WHERE `publication_status`='1'";
		$query_result=mysqli_query($this->connect,$sql);
		if($query_result){
			return $query_result;
		}
		else{
			die('Something wrong'.mysqli_error($this->connect));

			}
		}

	
	public function getAllPubblishManufacturer(){
		$sql="SELECT * FROM `manufacture_info` WHERE `publication_status`='1'";
		$query_result=mysqli_query($this->connect,$sql);
		if($query_result){
			return $query_result;
		}
		else{
			die('Something wrong'.mysqli_error($this->connect));

			}
		}

		public function SelectAllPublishProduct()
		{
			$sql="SELECT * FROM `add_product` WHERE `publication_status`='1'";
			$result=mysqli_query($this->connect,$sql);
			if($result){
			return $result;
		}else{
			die("Something went wrong".mysqli_error($this->connect));
		}

	}

		public function getProductByCategoryId($categoryId){
		$sql = "SELECT * FROM add_product WHERE publication_status = 1 AND cata_id = '$categoryId'";
		$queryResult = mysqli_query($this->connect,$sql);
		if($queryResult){
			return $queryResult;
		}else{
			die("Something went wrong".mysqli_error($this->connect));
		}
	}
	public function getRelatedProductByCategoryId($categoryId){
		$sql = "SELECT * FROM add_product WHERE publication_status = 1 AND cata_id = '$categoryId' ORDER BY product_id DESC limit 4";
		$queryResult = mysqli_query($this->connect,$sql);
		if($queryResult){
			return $queryResult;
		}else{
			die("Something went wrong".mysqli_error($this->connect));
		}
	}


		public function getProductInfoById($productId){
		$sql = "SELECT p.product_id, p.product_name, p.product_price,p.product_picture,m.manufacture_name,c.category_name,p.product_short_description,p.cata_id FROM add_product as p, category_info as c,manufacture_info as m WHERE p.cata_id=c.cata_id AND p.manu_id=m.manu_id AND p.product_id='$productId'";
		$queryResult = mysqli_query($this->connect,$sql);
		$data = mysqli_fetch_array($queryResult);
		if($data){
			return $data;
		}else{
			die("Something went wrong".mysqli_error($this->connect));
		}
	}



	public function get_publish_total_productByManuId($manuId){
		$sql="SELECT COUNT(manu_id) FROM add_product WHERE manu_id='$manuId'";
		$result=mysqli_query($this->connect, $sql);
		if($result){
			return $result;
		}
		else{
			die("Something Went wrong".mysqli_error($this->connect));
		}
	}


		public function getProductByManufactureId($Id){
		$sql = "SELECT * FROM add_product WHERE publication_status = 1 AND manu_id = '$Id'";
		$queryResult = mysqli_query($this->connect,$sql);
		if($queryResult){
			return $queryResult;
		}else{
			die("Something went wrong".mysqli_error($this->connect));
		}
	}


	public function addProductToCart($data){
		$productId=$data['pdtId'];	
		$sql="SELECT `product_name`,`product_price`,`product_picture` FROM `add_product` WHERE `product_id`='$productId'";
		$queryResult=mysqli_query($this->connect,$sql);
		$product=mysqli_fetch_array($queryResult);
		$quantity=$data['quantity'];
		$sessionId = session_id();
		$inser_query="INSERT INTO `temp_cart`(`session_id`,`product_id`,`product_name`,`product_price`,`product_picture`,`product_quantity`)VALUES('$sessionId','$productId','$product[product_name]','$product[product_price]','$product[product_picture]','$quantity')";
		$result=mysqli_query($this->connect,$inser_query);
		if($result){
			//header('Location:cart.php');
			echo "<script>location='cart.php'</script>";
		}
		else{
			die("Something went Wrong".mysqli_error());
		}

	}


	public function selectCartProductsBySessionId($sessionId){
		$sql="SELECT * FROM temp_cart WHERE session_id='$sessionId'";
		$query_result=mysqli_query($this->connect,$sql);
		if($query_result){

			if(mysqli_num_rows($query_result) > 0){

				$items = mysqli_fetch_all($query_result,MYSQLI_ASSOC);

			}
			else{
				return $items = [];
			}

			return $items;
		}
		else{
			die('Something Went Wrong'.mysqli_error($this->connect));
		}

	}



	public function updateCartProductQuantityByCartId($data){
		$sql="UPDATE `temp_cart` SET product_quantity='$data[quantity]' WHERE temp_cart_id='$data[temp_cart_id]'";
		$query_result=mysqli_query($this->connect,$sql);
		if($query_result){
				header('Location:cart.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}


	public function deleteTempCartById($carId){
		$sql="DELETE FROM temp_cart WHERE temp_cart_id='$carId'";
		$result=mysqli_query($this->connect,$sql);
		$customer_id = mysqli_insert_id($this->connect);
		if($result){
			$_SESSION['customer_id'] = $customer_id;
			$_SESSION['customer_name'] = $data['name'];
			$_SESSION['customer_email'] = $data['email_address'];
			header('Location:cart.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}

	public function signupCustomer($data){
		$sql="INSERT INTO `customer_info`(`customer_name`,`phone`,`email`,`password`,`address`,`district`)VALUES('$data[name]','$data[phone_number]','$data[email_address]','$data[password]','$data[address]','$data[district]')";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			$_SESSION['customer_id']=mysqli_insert_id($this->connect);
			header('Location:shipping.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}

	public function customerLoginToShipping($data){
		$phone = $data['phone'];

		$sql = "SELECT * FROM customer_info WHERE phone='$data[phone]'";
		$queryResult = mysqli_query($this->connect,$sql);
		$customer = mysqli_num_rows($queryResult);
		if($customer>0){
			$customerInfo = mysqli_fetch_array($queryResult);
			$_SESSION['customer_id'] = $customerInfo['customer_id'];
			$_SESSION['customer_name'] = $customerInfo['customer_name'];
			$_SESSION['customer_email'] = $customerInfo['email'];
			if(isset($_SESSION['order_total'])){
				header('Location:payment.php');
			}else{
				header('Location:index.php');
			}
		}else{
			$sql="INSERT INTO `customer_info`(`customer_name`,`phone`,`password`)VALUES('$phone','$phone','$phone')";
			$result=mysqli_query($this->connect,$sql);
			if($result){
				$_SESSION['customer_id'] = $this->connect->insert_id;
				$_SESSION['customer_name'] = $phone;
				$_SESSION['customer_email'] = $phone;

				if(isset($_SESSION['order_total'])){
					header('Location:payment.php');
				}else{
					header('Location:index.php');
				}
			}
		}

	}

	public function logoutCustomer(){
		unset($_SESSION['order_total']);
		unset($_SESSION['customer_id']);
		unset($_SESSION['customer_name']);
		unset($_SESSION['customer_email']);
		header('Location:index.php');
	}

	public function saveShippingInfo($data){
		$sql="INSERT INTO `shipping_info`(`full_name`,`email`,`phone`,`address`,`district`)VALUES('$data[full_name]','$data[email_address]','$data[phone_number]','$data[address]','$data[district]')";
		$result=mysqli_query($this->connect,$sql);
		$shipping_id=mysqli_insert_id($this->connect);
		if($result){
			$_SESSION['shipping_id']=$shipping_id;
			$_SESSION['shipping_district']=$data['district'];
			header('Location:payment.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}

	}

	public function completeCustomerOrder($data){
		$customer_id=$_SESSION['customer_id'];
		$shipping_id=null;
		$payment_type=$data['payment_type'];
		@ $transaction_id=$data['transaction_number'];
		$total_order=0;
		$_SESSION['payment_type']=$data['payment_type'];
		if($payment_type !='cash' && $transaction_id == null){
			die("Please go back and enter the $payment_type transaction number.");
		}
		// $shipping_district="SELECT district FROM `shipping_info` WHERE shipping_id='$shipping_id'";
		// $result=mysqli_query($this->connect,$shipping_district);
		// $dis_result=mysqli_fetch_array($result);
		// if(($dis_result=='dhaka')||($dis_result=='Dhaka')||($dis_result=='DHAKA')){
		// 	$total_order=$_SESSION['order_total']+50;
		// }
		// else{
		// 	$total_order=$_SESSION['order_total']+150;
		// } 
			$sql="INSERT INTO `order_info`(`customer_id`,`total_order`)VALUE('$customer_id','$total_order')";
			$order_result=mysqli_query($this->connect,$sql);
			$order_id=mysqli_insert_id($this->connect);
			if($order_result){
				if($payment_type=='cash'){
					$sql="INSERT INTO `payment_info`(`order_id`,`payment_type`)VALUES('$order_id','$payment_type')";
				}
				else{
					$sql="INSERT INTO `payment_info`(`order_id`,`payment_type`,`transaction_id`)VALUES('$order_id','$payment_type',$transaction_id)";
				}
				if(mysqli_query($this->connect,$sql)){
					$sessionId=session_id();
					$sql="SELECT * FROM `temp_cart` WHERE `session_id`='$sessionId'";
					$cartProducts = mysqli_query($this->connect,$sql);
						foreach ($cartProducts as $product) {
					$sql = "INSERT INTO order_details(order_id,product_id,product_name,product_price,product_quantity,product_image) VALUES('$order_id','$product[product_id]','$product[product_name]','$product[product_price]','$product[product_quantity]','$product[product_picture]')";
					mysqli_query($this->connect,$sql);

				$sql = "DELETE FROM temp_cart WHERE session_id='$sessionId'";
				mysqli_query($this->connect,$sql);

				}
				//echo "<script>alert('Order Sucessfully Completed')</script>";
				header('Location:bye.php');

				}
				else{
					die("Something Went Wrong,data not inserted to payment table".mysqli_error($this->connect));
				}
			}
			else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}

public function sendMailFromContact($data){
				$name=$data['name'];
				$to=$data['email'];
				$subject=$data['subject'];
				$message=$data['message'];

				$header="From:mehedifci907@gmail.com\r\n";
				$header.="MIME-Version:1.0\r\n";
				$header.="Content-type:text/html\r\n";
				$send=mail($to, $subject, $message,$header);
				if($send){
					echo "<script>alert('Thanks for contact us')</script>";
				}
				else{
					echo "<script>alert('Something went wrong')</script>";
					
				}
				
	}

public function save_cmnt($data){
	$sql="INSERT INTO `save_comnt`(`name`,`email`,`message`,`pdt_id`,`pdt_name`)VALUES('$data[name]','$data[email]','$data[message]','$data[pdt_id]','$data[pdt_name]')";
	$query_result=mysqli_query($this->connect,$sql);
		if($query_result){
			//header('Location:product_detail');
		}
		else{
			die('Something Went Wrong'.mysqli_error($this->connect));
		}
}


}

