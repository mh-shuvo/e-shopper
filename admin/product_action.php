<?php
session_start();
include '../classes/SuperAdmin.php';
$objSuperAdmin=new super_admin();
if(isset($_GET['product'])){
	$productId = $_GET['id'];
	if($_GET['product'] == 'publish'){
		$objSuperAdmin->publishProductById($productId);
	}elseif($_GET['product'] == 'unpublish'){
		$objSuperAdmin->unpublishProductById($productId);
	}elseif($_GET['product'] == 'delete'){
		$objSuperAdmin->deleteProductById($productId);
	}

}
?>