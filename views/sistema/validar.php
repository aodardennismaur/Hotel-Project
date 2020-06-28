<?php
require_once '../../model/Session.php';
$user = new Session();

session_start();
if(!$user->logged_in()){
    $user->redirect('../login.html');
}