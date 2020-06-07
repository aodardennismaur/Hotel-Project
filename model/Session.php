<?php

require_once 'conexion.php';

class Session extends Conexion {
    public function inicioSesion($correo, $clave){
        try{
            $db = $this->dblink->prepare("CALL listarUsuario(:p_correo, :p_clave)");
            $db->bindParam(":p_correo", $correo);
            $db->bindParam(":p_clave", $clave);
            $db->execute();
            $row = $db->fetch(PDO::FETCH_ASSOC);
            return $row;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }
}