<?php

declare(strict_types=1);	
use setasign\Fpdi\Tcpdf\Fpdi;
require_once('vendor/autoload.php');

session_start();

$cerFile = 'file://'.realpath('uploads_pem/test_cer.crt'); 
$pemKeyFile = 'file://'.realpath('uploads_pem/test_key.pem'); 
$passPhrase = $_SESSION['pass'];; // contraseña para abrir la llave privada


//Firmar el documento

$pdf = new FPDI('P', 'mm', 'A4'); //FPDI extends TCPDF

$pages = $pdf->setSourceFile('C:/xampp/htdocs/Proyecto/Documentos_A_Firmar/example.pdf');


/*
NOTES:
 - To create self-signed signature: openssl req -x509 -nodes -days 365000 -newkey rsa:1024 -keyout tcpdf.crt -out tcpdf.crt
 - To export crt to p12: openssl pkcs12 -export -in tcpdf.crt -out tcpdf.p12
 - To convert pfx certificate to pem: openssl pkcs12 -in tcpdf.pfx -out tcpdf.crt -nodes
*/


// set additional information
$info = array(
    'Name' => 'TCPDF',
    'Location' => 'Office',
    'Reason' => 'Testing TCPDF',
    'ContactInfo' => 'http://www.tcpdf.org',
    );

for ($i = 1; $i <= $pages; $i++)
    {
        $pdf->AddPage();
        $page = $pdf->importPage($i);
        $pdf->useTemplate($page, 0, 0);


        // set document signature
        $pdf->setSignature($cerFile, $pemKeyFile, $passPhrase, '', 2, $info);      

}




$pdf->Output('Signedexample.pdf', 'D');


?>