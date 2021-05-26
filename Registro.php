<!DOCTYPE html>

<?php
include("conexion_sql_server.php");
?>

<html>
<head>

	<title>Registro</title>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>
<body>
		<!--NAVBAR-->
		<nav class="navbar navbar-dark bg-dark">
  	<a class="navbar-brand" href="Login.php">
    	<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
    		SatSigner
  		</a>
		</nav>
		<!--NAVBAR-->


<!--REGISTRO-->
<div class="container">
  <div class="row align-items-start">
    <div class="col">
      
    </div>
    <div class="col">
	<form method="POST" action="Registro.php">

<div class="wrapper fadeInDown">
 <div id="formContent">

					<div class="form-group">
						<label>Apellido Paterno:</label>
						<input type="text" name="Paterno" class="form-control" placeholder="Escriba su Apellido Paterno"><br />
					</div>
					<div class="form-group">
						<label>Apellido Materno:</label>
						<input type="text" name="Materno" class="form-control" placeholder="Escriba su Apellido Materno"><br />
					</div>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" placeholder="Escriba su Nombre"><br />
					</div>
					<div class="form-group">
						<label>Segundo nombre::</label>
						<input type="text" name="nombre2" class="form-control" placeholder="(Opcional)Escriba su Segundo Nombre"><br />
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="email" class="form-control" placeholder="Escriba su Email"><br />
					</div>
					<div class="form-group">
						<label>Contraseña:</label>
						<input type="password" name="password" class="form-control" placeholder="Escriba su Contraseña"><br />
					</div>
					<div class="form-group">
					<input type="submit" name="insert" class="btn btn-warning" value="Registrate"><br />
					</div>

				<div id="formFooter"></div>

			</div>
	</div>
</form>
    </div>
    <div class="col">
      
    </div>
  </div>

<!--REGISTRO-->


<?php

if (isset($_POST['insert'])){
 $last_name1 = $_POST['Paterno'];
 $last_name2 = $_POST['Materno'];
 $name = $_POST['nombre'];
 $name2 = $_POST['nombre2'];
 $mail = $_POST['email'];
 $contra = $_POST['password'];


$insertar="INSERT INTO tb_cliente (Apellido_paterno, Apellido_materno, Nombre, Nombre_2, Correo, Pass) values ('$last_name1', '$last_name2','$name' ,'$name2'  , '$mail' , '$contra')";




if(empty($last_name1) || empty($last_name2) || empty($name) || empty($mail) || empty($contra)  ){
	echo"Completa los campos";
}
else{
	$ejecutar= sqlsrv_query($con, $insertar);
	echo"Usuario creado correctamente";
	header('Location: Login.php');
}


}

?>


 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</form>
</body>
</html>
