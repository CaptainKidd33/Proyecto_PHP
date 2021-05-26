<?php
include("conexion_sql_server.php");
 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <head>
       <title>Login</title>
  	<!--NAVBAR-->
		<nav class="navbar navbar-dark bg-dark">
  	<a class="navbar-brand" href="Login.php">
    	<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
    		SatSigner
  		</a>
		</nav>
		<!--NAVBAR-->
     </head>
     <body>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <!--FORM DE ENVIO-->

    <div class="container">
  <div class="row align-items-start">
    <div class="col">
     
    </div>
    <div class="col">
    <p class="text-center" style="color:blue;font-size:30px;">Bienvenido.</p>
    <p class="text-center" style="color:gray;font-size:20px;">Ingrese su correo y contraseña.</p>
      <form method="POST" action="Validar.php">
           <div class="wrapper fadeInDown">
            <div id="formContent">

              <form >
                <div class="form-group">
                  <label>Correo:</label>
                  <input type="text" name="email" class="form-control" placeholder="Escriba sus correo"><br />
                </div>

                <div class="form-group">
                  <label label-cols-sm="3">Contraseña:</label>
                  <input type="password" name="pass" class="form-control" placeholder="Escriba su Contraseña"><br />
                </div>

                <input type="submit" name="uploadBtn" value="Inicia Sesion"/>
              </form>

              <!-- Remind Passowrd -->
              <div id="formFooter">
                <label>¿ Nuevo usuario ?</label>
                    <a href="Registro.php"><input type="button" value="Registrarse"></a>
              </div>

            </div>
          </div>
      <!--</form>-->
      <!--FORM DE ENVIO-->

    </div>
    <div class="col">
      
    </div>
  </div>
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

   </body>
 </html>
