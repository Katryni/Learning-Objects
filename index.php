<?php
include_once('settings.php');
if(isset($_SESSION['login']))
{	
	$login_cookie = $_COOKIE['login'];
	$nome_cookie = $_COOKIE['nome'];
}
	   if(isset($login_cookie)) {
		   if(isset($nome_cookie)) {
				if(isset($nome_cookie)) {
					echo"Bem-vindo, $nome_cookie <br>";
					echo"Agora você <font color = 'red'>PODE</font> gerenciar a plataforma!";
				}
			}
	   }else {
		   echo"Bem-vindo, convidado <br>";
		   echo"Essas informações <font color = 'red'>NÃO PODEM</font> ser gerenciadas por você";
		   echo"<br><a href = 'login.html'> Faça Login</a> Para gerenciar a plataforma";
		}
?>