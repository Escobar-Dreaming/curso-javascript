<?php
		require_once("Consultas.php");

		$contactos = $_GET["contactos"];

		if($contactos === "contactos"){
			$contactos = Consultas::load();
		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		.table1{
			margin: 0 auto;
			width: 50%;
		}
		.box-newUser{
			width: 50%;
			margin: 0 auto;
			/*border: 1px solid red;*/
		}
	</style>
</head>
<body>
	<br>

	<div id="box-mostrar"></div>
	<!-- BOTON NEW USER -->
	<div class="box-newUser">
		<button class=" btn1 btn btn-primary" data-toggle="modal" data-target="#exampleModal"> New User</button>
	</div>
	<br>
	<!-- TABLA -->
	<table class="table1 table table-hover table-bordered">
		<thead class="thead-dark">
			<th>Nombre</th>
			<th>Email</th>
			<th>Celular</th>
			<th colspan="2">Operaciones</th>
		</thead>
		<tbody>
			<?php foreach ($contactos as $contacto){?>
			<tr>
				<td><?php echo $contacto['nombre'];?></td>
				<td><?php echo $contacto['email']; ?></td>
				<td><?php echo $contacto['celular']; ?></td>
				<td><a href="" class="btn btn-success">Editar</a></td>
				<td><a href="" class="btn btn-danger">Eliminar</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<!-- MODAL -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Insertar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h1>Insertar con AJAX</h1>
					<br>
					<label>Nombre:</label><input type="text" id="id_nombre"><br><br>
					<label>Email:</label><input type="email" id="id_email"><br><br>
					<label>Celular:</label><input type="text" id="id_celular"><br><br>
					<div id="box"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<input type="submit" value="Insertar" class="btn btn-primary" onclick="ajax_insert()">
				</div>
			</div>
		</div>
	</div>

	<!-- SCRIPT MOSTRAR -->
	<script type="text/javascript">
		var box = document.getElementById("box-mostrar");
		function ajax_load(){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState === 4 && xmlhttp.status === 200)
				{
					box.innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("get","index.php?contactos="+"contactos", true);
			xmlhttp.send();
		}
		ajax_load();
	</script>


	<!-- SCRIPT INSERTAR -->
	<script type="text/javascript">
		var box = document.getElementById("box");
		function ajax_insert(){
			var xmlhttp = new XMLHttpRequest();
			var nombre = document.getElementById('id_nombre').value;
			var email = document.getElementById('id_email').value;
			var celular = document.getElementById('id_celular').value;
			var response = "name_nombre="+nombre+"&name_email="+email+"&name_celular="+celular;
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState === 4 && xmlhttp.status === 200)
				{
					var mensaje = xmlhttp.responseText;
					box.innerHTML = mensaje;
				}
			}
			xmlhttp.open("post","procesar.php", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send(response);
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
