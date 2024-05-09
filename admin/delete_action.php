<?php 
session_start();
include('../classes/SuperAdmin.php');
$objSuperAdmin=new super_admin();
if(isset($_GET['id'])){
	$orderId=$_GET['id'];
	$objSuperAdmin->deleteOrderByOrderId($orderId);

}

?>