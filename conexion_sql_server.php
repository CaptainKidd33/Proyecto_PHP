<?php

$serverName= 'KARLA-LAP';
$connectionInfo= array("Database" => "SatSigner", "UID" =>"administrador_sat", "PWD"=>"test", "CharacterSet" => "UTF-8");
$con= sqlsrv_connect($serverName, $connectionInfo);

if($con){
    echo "exitosa";
}

?>