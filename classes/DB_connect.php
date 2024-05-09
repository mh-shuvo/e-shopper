<?php
 class database_connection
{
	private $host='192.168.30.16';
	private $user='pranta';
	private $password='root';
	private $db_name='shuvo_e_shopper';
	protected $connect;

		public function __construct(){
			$this->connect=mysqli_connect($this->host,$this->user,$this->password,$this->db_name);
			if(!$this->connect){
				die('Connection Error!!!!!!!'.mysqli_error($this->connect));
			}
			
		}
}
