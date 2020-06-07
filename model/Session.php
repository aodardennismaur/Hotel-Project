<?php

require_once 'conexion.php';

class Session extends Conexion {
    public function inicioSesion(){
        try{
            $db = $this->dblink->prepare('SELECT * FROM usuario');
            $db->execute();
            $row = $db->fetch(PDO::FETCH_ASSOC);
            return $row;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }
}