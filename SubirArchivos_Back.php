<?php
declare(strict_types=1);	
use setasign\Fpdi\Fpdi;
require_once('vendor/autoload.php');

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


if(isset($_POST['upload'])){
    $fileName = "test_cer.cer";
    $file_tem_loc = $_FILES['cer']['tmp_name'];
    $file_store = "uploads/".$fileName;

    move_uploaded_file($file_tem_loc, $file_store);

    $fileName = "test_key.key";
    $file_tem_loc = $_FILES['key']['tmp_name'];
    $file_store = "uploads/".$fileName;

    move_uploaded_file($file_tem_loc, $file_store);

    $fileName = "example.pdf";
    $file_tem_loc = $_FILES['pdf']['tmp_name'];
    $file_store = "Documentos_A_Firmar/".$fileName;

    move_uploaded_file($file_tem_loc, $file_store);

    $passPhrase = $_POST['pass']; // contraseña para abrir la llave privada
    $_SESSION['pass'] = $passPhrase;
    
}

header("Location: PagePrincipal_2.php");



?>


