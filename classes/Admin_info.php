<?php
include('DB_connect.php');

class Admin extends database_connection
{
	
	public function __construct()
	{
		parent:: __construct();
	}


	public function admin_login_check($data){
		 $adminEmail = $data['admin_email'];
		 $password = $data['password'];

		 $sql = "SELECT * FROM `admin_info` WHERE email='$adminEmail' and password='$password'";
		 $queryResult = mysqli_query($this->connect,$sql);
		 $adminInfo = mysqli_fetch_array($queryResult);
		 if($adminInfo){
		 	session_start();
		 	$_SESSION['admin_id'] = $adminInfo['id'];
		 	$_SESSION['admin_name'] = $adminInfo['admin_name'];
		 	header('Location:../admin/admin_master.php');
		 }else{
		 	echo "Invalid Information";
		 	//return $message;
		 }
	}

	public function admin_logout(){
		unset($_SESSION['admin_id']);
		unset($_SESSION['admin_name']);
		header('Location:../admin/index.php');
	} 
}