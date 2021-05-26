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



$cerFile = 'C:/xampp/htdocs/Proyecto/uploads/test_cer.cer';
$pemKeyFile = 'C:/xampp/htdocs/Proyecto/uploads/test_key.key';
$passPhrase = $_SESSION['pass']; // contraseña para abrir la llave privada

shell_exec('C:\OpenSSL-Win64\bin\openssl pkcs8 -inform DER -in C:/xampp/htdocs/Proyecto/uploads/test_key.key -out C:/xampp/htdocs/Proyecto/uploads_pem/test_key.pem  -passin pass:'.$passPhrase );
shell_exec('C:\OpenSSL-Win64\bin\openssl x509 -inform DER -in C:\xampp\htdocs\Proyecto\uploads\test_cer.cer -out C:\xampp\htdocs\Proyecto\uploads_pem\test_cer.crt ');

header("Location: Imprimir_Firma.php");
?>
