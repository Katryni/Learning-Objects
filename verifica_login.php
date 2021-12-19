<?php
session_start();
$SESSION = $_SESSION['login'];
if(!$SESSION) {
	header('Location: login.html');
	exit();
}
?>