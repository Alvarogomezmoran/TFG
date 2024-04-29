<?php
session_start();

require_once("../model/services/userSA.php");
require_once("../model/domains/tUser.php");

$avatarURL = $_POST['avatarInput'];

if($avatarURL !== ""){
    $userSA = new UserSA();

    $usuario = $_SESSION['usuario'];

    $user = $userSA->editAvatar($usuario, $avatarURL);

    if($user === true){
        $_SESSION['avatar'] = $avatarURL;
        header('location: /TFG/index.php');
    }
    else{
        header('location: ../../index.php?error=false');
        exit();
    }
}

header('location: ../../index.php?error=false');
