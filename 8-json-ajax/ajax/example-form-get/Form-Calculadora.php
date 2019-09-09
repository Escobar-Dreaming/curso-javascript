<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
</head>
<body>
	<br>
	<label>Ingrese 1er N°:</label><input type="" id="id_num1" name="name_num1"><br><br>
	<label>Ingrese 2do N°:</label><input type="" id="id_num2" name="name_num2"><br><br>

	<input type="submit" value="Enviar" onclick="ajax_get()">
	<div id="box"></div>


	<script type="text/javascript">
		
		var box = document.getElementById('box');
		function ajax_get(){

			var xmlhttp = new XMLHttpRequest();
			var num1 = document.getElementById('id_num1').value;
			var num2 = document.getElementById('id_num2').value;
			var response = "id_num1="+num1+"&id_num2="+num2;
			xmlhttp.onreadystatechange = function(){

				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
						var imprimir = xmlhttp.responseText;
						box.innerHTML = imprimir;
				}
			}

			xmlhttp.open('GET','procesar.php?'+response, true);
			xmlhttp.send();



		}




	</script>
</body>
</html>