<?php
include_once('settings.php');
$login = $_POST['login'];
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('127.0.0.1', 'root', '');

$query_select_1 = "SELECT login FROM administrador WHERE login = $login";
$query_select_2 = "SELECT nome FROM administrador WHERE nome = $nome";
$query_select_3 = "SELECT celular FROM administrador WHERE celular = $celular";
$select = mysqli_query($connect,$query_select_1);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];
$nomarray = $array['nome'];
$celarray = $array['celular'];

	if($login == "" || $login == null) {
		echo"<script language = 'javascript' type = 'text/javascript'> alert(1Esse login já existe');windows.location.href = 'cadastro.html';</script>";
	}else {
		if($logarray == $login) {
			echo"<script language = 'javascript' type = 'text/javascript'> alert('Esse login já existe');windows.location.href = 'cadastro.html';</script>";
			header('Location: cadastro.html');
			exit();
		}
		if($nome == "" || $nome == null) {
		echo"<script language = 'javascript' type = 'text/javascript'> alert(1Esse nome já existe');windows.location.href = 'cadastro.html';</script>";
		}else {
			if($nomarray == $nome) {
			echo"<script language = 'javascript' type = 'text/javascript'> alert('Esse nome já existe');windows.location.href = 'cadastro.html';</script>";
			die();
		}
		if($celular == "" || $celular == null) {
		echo"<script language = 'javascript' type = 'text/javascript'> alert(1Esse celular já existe');windows.location.href = 'cadastro.html';</script>";
		}else {
			if($celarray == $celular) {
			echo"<script language = 'javascript' type = 'text/javascript'> alert('Esse celular já existe');windows.location.href = 'cadastro.html';</script>";
			die();
		}
		else {
			$query = "INSERT INTO administrador (login,nome,senha,celular) VALUES ('$login','$nome','$senha',$celular)";
			//die();
			$insert = mysqli_query($connect,$query);
			
			if($insert) {
				echo"<script language = 'javascript' type = 'text/javascript'>alert('Administrador cadastrado com sucesso!!');windows.location.href = 'cadastro.html';</script>";
				die();
			}else {
				echo"<script language = ' javascript' type = ' text/javascript'> alert('Não foi possível cadastrar esse administrador');windows.location.href = 'cadastro.html';</script>";
			}
		}
	}
}
}header('Location: home.html');
?>