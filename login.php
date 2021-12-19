<?php
include_once('settings.php');
session_start();
$nome = $_SESSION['username'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$entrar = $_POST['entrar'];
var_dump($_POST);
$query = "SELECT * FROM `administrador` WHERE (`login` = '".$login ."') AND (`senha` = '".$senha ."')";
$result = mysqli_query($connect,$query);
$row = mysqli_num_rows($result);
	if($row == 1) {
		$_SESSION['username'] = $nome;
		header('Location: painel.php');
		exit();
	}else {
		header('Location: login.html');
		exit();
	}
?>