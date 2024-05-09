<?php
session_start();
include('../classes/SuperAdmin.php');
$objSuperAdmin=new super_admin();
	if(isset($_GET['status'])){
			$manufactureId = $_GET['id'];
			if($_GET['status'] == 'publish'){
				$objSuperAdmin->publishManufactureById($manufactureId);
			}
			elseif($_GET['status'] == 'unpublish'){
				$objSuperAdmin->unpublishManufactureById($manufactureId);
			}
			else if($_GET['status'] == 'delete'){
				$objSuperAdmin->deleteManufactureById($manufactureId);
			}
	}