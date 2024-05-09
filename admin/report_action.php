<?php
session_start();
include '../classes/SuperAdmin.php';
$objSuperAdmin=new super_admin();
$flag=$_GET['status'];
if($flag=='order'){
	$order_id=$_GET['id'];
	$objSuperAdmin->completeOrder($order_id);
}
?>