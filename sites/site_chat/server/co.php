<?php
$login = $_POST['login'];
$password = $_POST['password'];
$mdp = '123456';
if($password == $mdp){
	session_start();
}else{
	echo 'Mot de passe incorect !';
}
header("Location: ../client/app.php");