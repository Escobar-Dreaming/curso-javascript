<?php 

	if(!empty($_POST)){

		$user = $_POST["id_user"];
	    $pass = $_POST["id_pass"];

	    if(empty($user) || empty($pass)){
	    	echo "Por favor ingrese el campo correspondiente!!";
	    }else{
	    	echo "Ingresaste ".$user." con password ".$pass.".";
	    }

	    // var_dump($_POST);

	    // require_once('Form-POST.php');
	    // echo "Ingrese!!";
	    
	}
	








 ?>