<?php
session_start();

require_once("../model/services/userSA.php");
require_once("../model/domains/tUser.php");

$nickUser = htmlspecialchars(trim(strip_tags($_POST["username"])));
$password = htmlspecialchars(trim(strip_tags($_POST["password"])));

$userSA = new UserSA();

$user = $userSA->deleteUser($nickUser, $password);

if($user === -2){
    header('Location:  ../../index.php?error=login_error_us');
    exit();
}else if($user === -1){
    header('Location:  ../../index.php?error=login_error_pass');
    exit();
}
else if ($user != false) {
    if(session_start()){
		session_destroy();
		session_unset();
		header("Location: ../../index.php");
	}
	
	header("Location: ../../index.php");
}else{
    header('Location:  ../../index.php?error=false');
    exit();
}

