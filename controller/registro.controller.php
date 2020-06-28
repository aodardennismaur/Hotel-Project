<?php

require_once '../model/Registro.php';

try{
    $correo = $_POST['correoRegistro'];
    $clave = $_POST['claveRegistro'];

    $objRegistro = new Registro();
    $rpt = $objRegistro->registrarUsuario($correo, md5($clave));
    echo $rpt;

}catch(Exception $ex){
    echo $ex->getMessage();
}