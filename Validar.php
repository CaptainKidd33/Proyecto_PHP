<?php
session_start()
?>

<?php
$serverName= 'KARLA-LAP';
$connectionInfo= array("Database" => "SatSigner", "UID" =>"administrador_sat", "PWD"=>"test", "CharacterSet" => "UTF-8");
$con= sqlsrv_connect($serverName, $connectionInfo);

// username and password sent from form 
 $mail = $_POST['email'];
 $contra = $_POST['pass'];



$sql="SELECT * FROM tb_cliente WHERE Correo='$mail' and Pass='$contra'";
$result=sqlsrv_query($con, $sql);

if(sqlsrv_rows_affected($result)){
	$_SESSION['login']=true;
	$_SESSION['email']=$mail;
	$_SESSION['start']=time();
	$_SESSION['expire']=$_SESSION['start'] + (60 * 10);
	header('Location: PagePrincipal.php');
	
}
else{
	echo "Incorrecto";
	header('Location: Fail.php');
}
?>