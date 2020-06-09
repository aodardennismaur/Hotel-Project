<?php

require_once 'conexion.php';

class Parametros extends Conexion {
    public function getParametro(){
        try{
            $db = $this->dblink->prepare("CALL getParametros('1000')");
            $db->execute();
            $row = $db->fetchAll();
            return $row;
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
}