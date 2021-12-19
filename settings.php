<?php
$connect = mysqli_connect('127.0.0.1', 'root', '');
$db = mysqli_select_db($connect,'repositorio');
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		die();
	}
?>