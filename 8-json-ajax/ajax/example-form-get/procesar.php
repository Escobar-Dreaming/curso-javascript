<?php 

	if(!empty($_GET)){

		$num1 = $_GET['id_num1'];
		$num2 = $_GET['id_num2'];

		function suma($num1, $num2){
			$suma = $num1 + $num2;
			$mensaje = "La suma es:".$suma."<br>";
			echo $mensaje;
		}

		function restar($num1, $num2){
			$resta = $num1 - $num2;
			$mensaje = "La resta es:".$resta."<br>";
			echo $mensaje;
		}
		
		if(empty($num1) || empty($num2)){
			echo "Completa los campos!!";
		}else{
			suma($num1, $num2);
			restar($num1, $num2);
		}


	


	}









 ?>
