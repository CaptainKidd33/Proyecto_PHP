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
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


		<!--NAVBAR-->
		<nav class="navbar navbar-dark bg-dark">
  	<a class="navbar-brand" href="Login.php">
    	<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
    		SatSigner
  		</a>
		</nav>
		<!--NAVBAR-->
      <p class="text-center" style="color:blue;font-size:30px;">Página para firmar documentos con FIEL.</p>

</head>
<body>

<div class="container">
  <div class="row align-items-start">
    <div class="col">
     
    </div>
    <div class="col">
    <form action="SubirArchivos.php" method="post" enctype="multipart/form-data">

<input type="submit" name="uploadBtn" value="Elige un documento y carga la e.firma"/>
</form>

<form action="Convert.php">
       <button type="submit">Firma tu documento</button>
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

