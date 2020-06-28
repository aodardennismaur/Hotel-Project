<?php

require_once '../model/Correo.php';

try{
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $asunto = "Mensaje confirmado";
    $mensaje = $_POST['mensaje'];
    $premensaje = "Este es un mensaje de confirmacion del hotel Rubi";

    $objCorreo = new Correo();

    $resultado = $objCorreo->enviarCorreo($nombres, $correo, $asunto, $mensaje, $premensaje);

    echo $resultado;

}catch(Exception $ex){
    echo $ex->getMessage();
}