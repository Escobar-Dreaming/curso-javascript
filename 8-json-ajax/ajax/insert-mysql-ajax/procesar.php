<?php 
		
	require_once("consultas.php");

	if(!empty($_POST)){

		$nombre = $_POST['name_nombre'];
		$email = $_POST['name_email'];
		$celular = $_POST['name_celular'];

		$array_contact = [$nombre, $email, $celular];

		if(empty($nombre) || empty($email) || empty($celular)){
			echo "Complete  los campos requeridos!!";
		}else{
			insertar($array_contact);
			echo "Se Inserto: <br>".$nombre."<br>".$email."<br>".$celular;
		}
	}
 ?>