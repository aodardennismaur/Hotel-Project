<?php

require_once '../model/Session.php';

try{
    $obj = new Session();
    $obj->logout();
    $obj->redirect('../views/login.html');
}catch(Exception $e){
    echo $e->getMessage();
}