<?php 

	
	class Consultas{

		
		public static function insert(array $contacto){
			require_once("Conexion.php");
			
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

	
		public static function load(){
			require_once("Conexion.php");
			$contactos = null;
			$pdo = Conexion::abrirConexion();
			$sql = 'select * from contacto order by nombre';

			//Preparo la conexion
			$st = $pdo->prepare($sql);
			//Ejecuta 
			$st->execute();

			//Procesa los Resultados
			while($rs = $st->fetch()){
				$contactos[] = $rs;
			}
			return $contactos;

		}

	}
 ?>