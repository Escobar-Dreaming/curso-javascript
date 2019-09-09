<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORM-POST</title>
</head>
<body>
	<!-- <form method="post" action="procesar.php"> -->
		User:<input type="text" name="name_user" id="id_user"  autofocus>
		<br><br>
		Pass:<input type="text" name="name_pass" id="id_pass"  ><br><br>
		<input type="submit" onclick="ajax_post();">
		<div id="box"></div>
	<!-- </form> -->


	<script type="text/javascript">


		var box = document.getElementById('box');
		function ajax_post(){

			var ajaxRequest = null;

			ajaxRequest = new XMLHttpRequest();

			var user = document.getElementById('id_user').value;
			var pass = document.getElementById('id_pass').value;

			var response = "id_user="+ user +"&id_pass="+ pass; 




			ajaxRequest.onreadystatechange = function(){

				if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){

					var mensaje = ajaxRequest.responseText;
					box.innerHTML += mensaje;


				}
			}

			ajaxRequest.open("POST","procesar.php", true);
			ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			ajaxRequest.send(response);

		}




	</script>
	
</body>
</html>