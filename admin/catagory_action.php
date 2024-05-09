<?php
session_start();
include('../classes/SuperAdmin.php');
$objSuperAdmin=new super_admin();
	if(isset($_GET['status'])){
			$categoryId = $_GET['id'];
			if($_GET['status'] == 'publish'){
				$objSuperAdmin->publishCategoryById($categoryId);
			}
			elseif($_GET['status'] == 'unpublish'){
				$objSuperAdmin->unpublishCategoryById($categoryId);
			}
			else if($_GET['status'] == 'delete'){
				$objSuperAdmin->deleteCategoryById($categoryId);
			}
	}


	