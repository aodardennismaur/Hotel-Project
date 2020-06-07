<?php

header('Content-Type: application/json');

require_once '../model/Session.php';

try{
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $objSesion = new Session();

    $resultado = $objSesion->inicioSesion($correo, md5($clave));

    echo json_encode($resultado);

}catch(Exception $ex){  
    echo $ex-getMessage();
}