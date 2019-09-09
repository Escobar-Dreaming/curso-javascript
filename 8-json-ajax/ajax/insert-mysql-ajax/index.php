<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
</head>
<body>
	<h1>Insertar con AJAX</h1>
	<br>
	<label>Nombre:</label><input type="text" id="id_nombre" name="name_nombre"><br><br>
	<label>Email:</label><input type="email" id="id_email" name="name_email"><br><br>
	<label>Celular:</label><input type="text" id="id_celular" name="name_celular"><br><br>

	<input type="submit" value="Enviar" onclick="ajax_insert()">
	<div id="box"></div>
	

	<script type="text/javascript">
		
		
		var box = document.getElementById('box');
		function ajax_insert(){

			var xmlhttp = new XMLHttpRequest();
			var nombre = document.getElementById('id_nombre').value;
			var email = document.getElementById('id_email').value;
			var celular = document.getElementById('id_celular').value;			
			var response = "name_nombre="+nombre+"&name_email="+email+"&name_celular="+celular;
			
			xmlhttp.onreadystatechange = function(){

				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
						var imprimir = xmlhttp.responseText;
						box.innerHTML = imprimir;
				}
			}

			xmlhttp.open('POST','procesar.php', true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send(response);



		}

	</script>
</body>
</html>