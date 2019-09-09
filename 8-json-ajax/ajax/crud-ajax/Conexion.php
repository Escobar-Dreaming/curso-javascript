
<?php

	class Conexion{

		  public static function abrirConexion(){
			$user = 'yagamy';
			$pass = "root";
			$db = "app3
			$pdo = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
			return $pdo;
		}
	}

 ?>
