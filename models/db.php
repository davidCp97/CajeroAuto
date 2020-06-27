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

<?php
require_once 'core/core.php';

$c = isset($_GET['c']) ? $_GET['c'] : 'administrator';
$m = isset($_GET['m']) ? $_GET['m'] : 'index';
$c .= 'Controller';

if(file_exists('controllers/' . $c . '.php')){
    require_once 'controllers/' . $c . '.php';
    if(method_exists($c, $m)){
        $c = new $c;
        call_user_func([$c,$m]);
    }else{
        die("Error : El metodo o funcion [{$m}()] no existe");
    }    
}else{
    die("Error : El controlador [{$c}] no existe.");
}
