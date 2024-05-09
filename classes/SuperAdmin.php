<?php
include('DB_connect.php');
/**
* 
*/
class super_admin extends database_connection
{
	
	public function __construct()
	{
		parent:: __construct();
	}

		

	/*--------------------Catagory Information--------------------------------*/
public function saveCategory($data){
		$sql = "INSERT INTO `category_info`(category_name,category_description,publication_status) VALUES('$data[catagory_name]','$data[catagory_description]','$data[publication_status]')";

		if(mysqli_query($this->connect,$sql)){
			$message = "Category saved successfully!";
			return $message;
		}else{
			die('Something wrong'.mysqli_error($this->connect));
		}

	}
	
	public function selectAllCategory(){
		$sql = "SELECT * FROM `category_info`";
		$queryResult = mysqli_query($this->connect,$sql);

		if($queryResult){
			return $queryResult;
		}else{
			die('Something went wrong '.mysqli_error($this->connect));
		}
	}

	public function publishCategoryById($categoryId){
		$sql = "UPDATE `category_info` SET publication_status=1 WHERE cata_id = '$categoryId'";
		if(mysqli_query($this->connect,$sql)){
			$_SESSION['message'] = "Category published successfully"; 
			header('Location:manage_catagory.php');
		}else{
			die('Something went wrong'.mysqli_error($this->connect));
		}
	}

	public function unpublishCategoryById($categoryId){
		$sql = "UPDATE `category_info` SET publication_status=0 WHERE cata_id = '$categoryId'";
		if(mysqli_query($this->connect,$sql)){
			$_SESSION['message'] = "Category unpublished successfully"; 
			header('Location:manage_catagory.php');
		}else{
			die('Something went wrong'.mysqli_error($this->connect));
		}
	}

	public function getCategoryInfoById($catagoryId){
	/*	echo $catagoryId;
		exit();*/
		$cata_id=$catagoryId;
		$sql="SELECT * FROM `category_info` WHERE `cata_id`='$cata_id'";
		$queryResult=mysqli_query($this->connect,$sql);
		$catagoryInfo=mysqli_fetch_array($queryResult);
		if($catagoryInfo){
			return $catagoryInfo;
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}

	}
	public function update_catagory($data)
	{
		$sql="UPDATE `category_info` SET `category_name`='$data[category_name]',`category_description`='$data[category_description]',`publication_status`='$data[publication_status]' WHERE `cata_id`=$data[category_id]";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			$_SESSION['message']="Catagory Sucessfully Upadated";
			header('Location:manage_catagory.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}
	public function deleteCategoryById($catagoryId)
	{
		$sql="DELETE FROM category_info WHERE cata_id='$catagoryId'";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			$_SESSION['message']="Catagory Sucessfully Deleted";
			header('Location:manage_catagory.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}

	/*--------------------Manufacture Information--------------------------------*/

public function saveManufacture($data){
		$sql = "INSERT INTO `manufacture_info`(manufacture_name,manufacture_description,publication_status) VALUES('$data[manufacture_name]','$data[manufacture_description]','$data[publication_status]')";

		if(mysqli_query($this->connect,$sql)){
			$message = "Manufacture saved successfully!";
			return $message;
		}else{
			die('Something wrong'.mysqli_error($this->connect));
		}

	}

public function selectAllManufacture(){
		$sql = "SELECT * FROM `manufacture_info`";
		$queryResult = mysqli_query($this->connect,$sql);

		if($queryResult){
			return $queryResult;
		}else{
			die('Something went wrong '.mysqli_error($this->connect));
		}
	}

	public function getManufactureInfoById($manufactureId){
	/*	echo $catagoryId;
		exit();*/
		$manu_id=$manufactureId;
		$sql="SELECT * FROM `manufacture_info` WHERE `manu_id`='$manu_id'";
		$queryResult=mysqli_query($this->connect,$sql);
		$manufactureInfo=mysqli_fetch_array($queryResult);
		if($manufactureInfo){
			return $manufactureInfo;
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}

	}
public function update_manufacture($data)
	{
		$sql="UPDATE `manufacture_info` SET `manufacture_name`='$data[manufacture_name]',`manufacture_description`='$data[manufacture_description]',`publication_status`='$data[publication_status]' WHERE `manu_id`=$data[manu_id]";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			$_SESSION['message']="Manufacture Sucessfully Upadated";
			header('Location:manage_manufacture.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}

	public function publishManufactureById($manufactureId){
		$sql = "UPDATE `manufacture_info` SET publication_status=1 WHERE manu_id = '$manufactureId'";
		if(mysqli_query($this->connect,$sql)){
			$_SESSION['message'] = "Manufacture published successfully"; 
			header('Location:manage_manufacture.php');
		}else{
			die('Something went wrong'.mysqli_error($this->connect));
		}
	}

	public function unpublishManufactureById($manufactureId){
		$sql = "UPDATE `manufacture_info` SET publication_status=0 WHERE manu_id = '$manufactureId'";
		if(mysqli_query($this->connect,$sql)){
			$_SESSION['message'] = "Manufacture unpublished successfully"; 
			header('Location:manage_manufacture.php');
		}else{
			die('Something went wrong'.mysqli_error($this->connect));
		}
	}
	public function deleteManufactureById($manufactureId)
	{
		$sql="DELETE FROM manufacture_info WHERE manu_id='$manufactureId'";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			$_SESSION['message']="Manufacture Sucessfully Deleted";
			header('Location:manage_manufacture.php');
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}


	/*------------------------Product Informaiton--------------------------*/
	public function getAllPubblishCatagory(){
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


		public function save_product($data){

		$directroy = '../asset/image/product_image/';
		$target_file = $directroy.$_FILES['product_picture']['name'];
		$file_type = pathinfo($target_file,PATHINFO_EXTENSION);
		$file_size = $_FILES['product_picture']['size'];
		$image = getimagesize($_FILES['product_picture']['tmp_name']);
		if($image){
		    if(file_exists($target_file)){
		        echo 'This image is already exist';
		        exit();
		    }else{
		        if($file_size>=5242880){
		            echo 'File size is too large. Please Select a file within 5MB';
		            exit();
		        }else{
		            if($file_type != 'jpg' && $file_type != 'png'){
		                die('File type is not valid');
		            }else{
		                move_uploaded_file($_FILES['product_picture']['tmp_name'], $target_file);

		                $sql = "INSERT INTO `add_product`(product_name,cata_id,manu_id,stock_quantity,product_sku,product_price,product_picture,product_short_description,product_long_description,publication_status) VALUES('$data[product_name]','$data[category_id]','$data[manufacturer_id]','$data[stock_quantity]','$data[product_sku]','$data[product_price]','$target_file','$data[product_short_description]','$data[product_long_description]','$data[publication_status]')";

		                if(mysqli_query($this->connect,$sql)){
		                	return "Product saved successfully";
		                }else{
		                	die("Something went wrong".mysqli_error($this->connect));
		                }
		                
		               
		            }
		        }
		    }
		}else{
		    echo 'This is not an Image';
		    exit();
		}
	}

	public function selectAllProducts(){
		$sql = "SELECT p.product_id,p.product_name,p.cata_id,p.manu_id,p.stock_quantity,p.product_price,p.publication_status,c.category_name,m.manufacture_name FROM add_product as p, category_info as c, manufacture_info as m WHERE p.cata_id=c.cata_id AND p.manu_id=m.manu_id";
		$queryResult = mysqli_query($this->connect,$sql);

		if($queryResult){
			return $queryResult;
		}else{
			die('Something went wrong '.mysqli_error($this->connect));
		}
	}

	public function publishProductById($productId){
		$sql = "UPDATE add_product SET publication_status=1 WHERE product_id = '$productId'";
		if(mysqli_query($this->connect,$sql)){
			$_SESSION['message'] = "Product published successfully"; 
			header('Location:../admin/manage_product.php');
		}else{
			die('Something went wrong'.mysqli_error($this->connect));
		}
	}

	public function unpublishProductById($productId){
		$sql = "UPDATE add_product SET publication_status=0 WHERE product_id = '$productId'";
		if(mysqli_query($this->connect,$sql)){
			$_SESSION['message'] = "Product unpublished successfully"; 
			header('Location:../admin/manage_product.php');
		}else{
			die('Something went wrong'.mysqli_error($this->connect));
		}
	}

		public function deleteProductById($productId){
		$sql = "DELETE FROM add_product WHERE product_id = '$productId'";
		if(mysqli_query($this->connect,$sql)){
			$_SESSION['message'] = "Product deleted successfully"; 
			header('Location:../admin/manage_product.php');
		}else{
			die('Something went wrong'.mysqli_error($this->connect));
		}
	}



	public function getproductInfoById($pdtId){
			$sql="SELECT * FROM add_product WHERE product_id='$pdtId'";
			$queryResult=mysqli_query($this->connect,$sql);
			$result=mysqli_fetch_array($queryResult);
			if($result){
				//print_r($queryResult);
				return $result;
			}
			else{
				echo "Something went Wrong";
			}
	}

	public function selectProductByProducutId($Id){
		$sql="SELECT p.*, c.category_name,m.manufacture_name FROM add_product as p, category_info as c, manufacture_info as m WHERE p.cata_id=c.cata_id AND p.manu_id=m.manu_id AND p.product_id=$Id";
		$result=mysqli_query($this->connect, $sql);
		$data=mysqli_fetch_array($result);
		 if($data){
		 	return $data;
		 }
		 else{
		 	die("Something Went Wrong".mysqli_error());
		 }
	}


	public function selectAllOrder(){
		$sql="SELECT o.order_id,o.total_order,o.order_status,o.order_date,o.customer_id,o.shipping_id, s.full_name,s.phone FROM order_info as o,shipping_info as s  WHERE o.shipping_id=s.shipping_id";
		$result=mysqli_query($this->connect,$sql);
		if($sql){
			return $result;
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}


public function getCustomerInfoByOrderId($orderId){
		$sql = "SELECT o.order_id,c.customer_name,c.phone,c.email,c.address,c.district FROM order_info as o, customer_info as c WHERE o.customer_id=c.customer_id AND o.order_id='$orderId'";
		$queryResult = mysqli_query($this->connect,$sql);
		if($queryResult){
			$data = mysqli_fetch_array($queryResult);
			return $data;
		}else{
			die("Customer info query problem".mysqli_error($this->connect));
		}
	}

	public function getShippingInfoByOrderId($orderId){
		$sql = "SELECT o.order_id,s.full_name,s.phone,s.email,s.address,s.district FROM order_info as o, shipping_info as s WHERE o.shipping_id=s.shipping_id AND o.order_id='$orderId'";
		$queryResult = mysqli_query($this->connect,$sql);
		if($queryResult){
			$data = mysqli_fetch_array($queryResult);
			return $data;
		}else{
			die("Shipping info query problem".mysqli_error($this->connect));
		}
	}

	public function getProductInfoByOrderId($orderId){
		$sql = "SELECT * FROM order_details WHERE order_id='$orderId'";
		$queryResult = mysqli_query($this->connect,$sql);
		if($queryResult){
			return $queryResult;
		}else{
			die("Product info query problem".mysqli_error($this->connect));
		}
	}

	public function getPaymentInfoByOrderId($orderId){
		$sql = "SELECT * FROM payment_info WHERE order_id='$orderId'";
		$queryResult = mysqli_query($this->connect,$sql);
		if($queryResult){
			$data = mysqli_fetch_array($queryResult);
			return $data;
		}else{
			die("Payment info query problem".mysqli_error($this->connect));
		}
	}

	public function getTotalOrderByOrderId($data){
		$sql="SELECT * from order_info WHERE order_id='$data'";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			return $result;
		}
		else{
			die("Soemthing went wrong".mysqli_error());
		}
	}

	public function deleteOrderByOrderId($id){
		$sql="DELETE FROM order_info WHERE order_id='$id'";
		$result=mysqli_query($this->connect,$sql);
		if(!$result){
			die("Something Went Wrong".mysqli_error($this->connect));
		}
		else{
			header('Location:manage_order.php');

		}


	}


	public function completeOrder($id){
		$sql=" SELECT o.order_id,o.total_order,c.customer_name,c.phone FROM order_info as o, customer_info as c WHERE o.customer_id =c.customer_id AND o.order_id='$id'";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			$data=mysqli_fetch_array($result);
			$sql="INSERT INTO `sale_info`(`order_id`,`customer_name`,`phone`,`total_order`)VALUES
			('$id','$data[customer_name]','$data[phone]','$data[total_order]')";
			$insert_result=mysqli_query($this->connect,$sql);
			if($insert_result){
				$sql="UPDATE order_info SET order_status='complete' WHERE order_id='$id'";
				$queryResult=mysqli_query($this->connect,$sql);
				if($queryResult){
					$sql="UPDATE payment_info SET payment_status='complete' WHERE order_id='$id'";
					$result=mysqli_query($this->connect,$sql);
					if($result){
						echo "<script>alert('Sucessfully Order Completed')</script>";
						header('Location:order_report.php');
					}
						}
				else{
				die("dont update data to order table".mysqli_error($this->connect));
			}

			}
			else{
				die("dont insert data to sale table".mysqli_error($this->connect));
			}
		}
		else{
		die("Something Went Wrong".mysqli_error($this->connect));
		}
		
	}


		public function countOrder(){
		$sql="SELECT COUNT(*) FROM order_info WHERE order_status='Pending'";
		$result=mysqli_query($this->connect,$sql);
		$count=mysqli_fetch_array($result);
		if($count){
			return $count;
		}
		else{
			die("Something went wrong".mysqli_error($this->connect));
		}
	}

	public function countCustomer(){
		$sql="SELECT COUNT(*) FROM customer_info";
		$result=mysqli_query($this->connect,$sql);
		$count=mysqli_fetch_array($result);
		if($count){
			return $count;
		}
		else{
			die("Something went wrong".mysqli_error($this->connect));
		}
	}
	public function countSale(){
		$sql="SELECT COUNT(*) FROM sale_info";
		$result=mysqli_query($this->connect,$sql);
		$count=mysqli_fetch_array($result);
		if($count){
			return $count;
		}
		else{
			die("Something went wrong".mysqli_error($this->connect));
		}
	}


	public function selectAllSale(){
		$sql="SELECT * FROM `sale_info`";
		$result=mysqli_query($this->connect,$sql);
		
		if($result){
			return $result;
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}

	public function selectAllCustomer(){
		$sql="SELECT * FROM `customer_info`";
		$result=mysqli_query($this->connect,$sql);
		
		if($result){
			return $result;
		}
		else{
			die("Something Went Wrong".mysqli_error($this->connect));
		}
	}

	public function admin_logout(){
		unset($_SESSION['admin_id']);
		unset($_SESSION['admin_name']);
		header('Location:../admin/index.php');
	}

}