<?php
declare(strict_types=1);	
use setasign\Fpdi\Fpdi;
require_once('vendor/autoload.php');

session_start();

$cerFile = 'C:/xampp/htdocs/Proyecto/uploads/test_cer.cer';
$pemKeyFile = 'C:/xampp/htdocs/Proyecto/uploads/test_key.key';
$passPhrase = $_SESSION['pass']; // contraseña para abrir la llave privada

$fiel = PhpCfdi\Credentials\Credential::openFiles($cerFile, $pemKeyFile, $passPhrase);

$sourceString = 'test';


// alias de privateKey/sign/verify
$signature = $fiel->sign($sourceString);
$firma = "La firma electronica es: ".base64_encode($signature);


// alias de certificado/publicKey/verify
$verify = $fiel->verify($sourceString, $signature);


// objeto certificado
$certificado = $fiel->certificate();
$rfc = $certificado->rfc();
$name = $certificado->legalName();
$cer =  $certificado->serialNumber()->bytes();

// Ejecuta el PDF

$pdf = new FPDI();
// get the page count
$pageCount = $pdf->setSourceFile('C:/xampp/htdocs/Proyecto/Documentos_A_Firmar/example.pdf');
// iterate through all pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
// import a page
$templateId = $pdf->importPage($pageNo);
// get the size of the imported page
$size = $pdf->getTemplateSize($templateId);

// create a page (landscape or portrait depending on the imported page size)
if ($size['0'] > $size['1']) {
    $pdf->AddPage('L', array($size['0'], $size['1']));
} else {
    $pdf->AddPage('P', array($size['0'], $size['1']));
}

// use the imported page
$pdf->useTemplate($templateId);
$pdf->SetFont('Helvetica');
$pdf->SetXY(5, 5);
}

 $pdf->AddPage(); 
 $pdf->Write(5, $firma);
 $pdf->Multicell(0,2,"\n\n\n\n\n"); 
 $pdf->Write(5, $name);
 $pdf->Multicell(0,2,"\n\n\n\n\n"); 
 $pdf->Write(5, $rfc);
 $pdf->Multicell(0,2,"\n\n\n\n\n"); 
 $pdf->Write(5, $cer);
 $pdf->Multicell(0,2,"\n\n\n\n\n"); 
// Output the new PDF
$pdf->Output('F', 'C:/xampp/htdocs/Proyecto/Documentos_A_Firmar/example.pdf');

header("Location: Firmar.php");

?>