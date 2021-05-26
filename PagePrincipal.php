<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

} else {
   echo "Inicia Sesion para acceder a este contenido.<br>";
   echo "<br><a href='Login.php'>Login</a>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
header('Location:Login.php');//redirige a la página de login, modifica la url a tu conveniencia
echo "Tu sesion a expirado,
<a href='Login.php'>Inicia Sesion</a>";
exit;
}


?>




<html>
<head>
<title>SatSigner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
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
    <p class="text-center" style="color:blue;font-size:30px;">Página para firmar documentos con FIEL.</p>

<div class="container">
  <div class="row align-items-start">
    <div class="col">
      
    </div>
    <div class="col">

<form action="SubirArchivos.php" method="post" enctype="multipart/form-data">

  <input type="submit" name="uploadBtn" value="Elige un documento y carga la e.firma"/>
</form>

<form action="killsesion.php" method="post" enctype="multipart/form-data">

  <input type="submit" name="uploadBtn" value="Cerrar Sesion"/>
</form>
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

