<?php

require_once 'conexion.php';

class Registro extends Conexion {
    public function registrarUsuario($correo, $clave){
        try{
            $nuevaClave = md5($clave);
            $db = $this->dblink->prepare("CALL registrarUsuario(:p_correo,:p_clave);");
            $db->bindParam(":p_correo", $correo);
            $db->bindParam(":p_clave", $nuevaClave);
            $db->execute();
            return 'Registro completo';
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
}