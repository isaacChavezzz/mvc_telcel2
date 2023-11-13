<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class db{	
	protected function connect(){
		try {
			$connect = new PDO('mysql:host=localhost;dbname=bd_telcel;charset=utf8;','root','');
			$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $connect;	
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}
}
?>