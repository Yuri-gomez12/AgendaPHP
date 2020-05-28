<?php
require_once "conexion.php";
if ($php_response["msg"]=="OK"){
	$u_exiten = mysqli_query($conexion, "SELECT * FROM usuarios");
	if (mysqli_num_rows($u_exiten) > 0 ){
		$php_response['obser']= "los usaurios ya existen ";
	
	}else{

		$email = "prueba@gmail.com";
		$nombre="Prueba1";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)"); 
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "prueba2@gmail.com";
		$nombre="Prueba2 ";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

	}	
	$cumple = date('Y/m/d',strtotime("1982/07/08"));
	



}
