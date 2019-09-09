<?php 

	require_once("Conexion.php");


	function insertar(array $contacto){

		$pdo = Conexion::abrirConexion();


		$sql = 'insert into contacto(nombre, email, celular) values(:nombre, :email, :celular)';

		//Preparo la conexion
		$st = $pdo->prepare($sql);

		//Ejecuta y asigna
		$st->execute([
			":nombre" => $contacto[0],
			":email" => $contacto[1],
			":celular" => $contacto[2]	
		]);
	}







 ?>