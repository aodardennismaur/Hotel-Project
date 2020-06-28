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
            if($db->rowCount()){
                session_start();
                $_SESSION['correo'] = $row['usuario'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellido'] = $row['apellido'];
                return true;
            }
            return false;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function logged_in(){
        if(isset($_SESSION['correo'])){
            return true;
        }
    }
    public function redirect($url){
        header("Location: $url");
    }

    public function logout(){
        session_start();
        foreach($_SESSION as $key){
            unset($_SESSION[$key]);
        }
        session_destroy();
    }
}