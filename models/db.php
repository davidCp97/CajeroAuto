<?php

class db{	
	protected function connect(){
		try {
			$connect = new PDO('mysql:host=localhost;dbname=cajeroauto;charset=utf8;','root','12345678');
			$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $connect;	
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}
}
?>
