
<?php
@session_start();
?>
<html>
<head>
	<meta charset = "UTF-8"/>
	<title>Painel de Controle</title>
	<link rel = "stylesheet" type = "text/css" href = "css/conteudo-painel.css"/>
	<link rel ="sortcut icon" href="favicon_M.ico" type="image/x-icon" />
	<script type = "text/javascript"></script>
	<style>
		a{
			font-family: arial, sans-serif;
		}
		p{
			font-family: arial, sans-serif;
		}
	</style>
</head>
<body>
<div class = "col-xs-6">
</div>
<div id = "interface">
	<iframe src = "about:blank" id = "frame1" class = "painel2" width = "600px" height = "1300px" style = "border:none;"></iframe>
</div>
<aside id = "lado">
	<nav class = "navbar-default">
		<p><img src = "img/photo-user.png" class = "foto-user" width = "40px"
	height = "40px"/><b>	Usuário</b></p>
	<div class = "list-group">
	<a href = "home.html" class = "list-group-item"><span class="glyphicon glyphicon-home"></span>Início</a></br>
	<p></p>
	<select  name = "url" onchange = "document.getElementById('frame1').src=this.value">
		<option value = "publicar.html">Publicar Conteúdo</option>
		<option value = "alterar.html">Relação de Conteúdos</option>
	</select></br></br>
		<a href = "cadastro.html" class = "list-group-item">Cadastrar Admin</a></br>
		<a href = "logout.php" class = "list-group-item">Sair</a>
	</div>
	</nav>
</aside>
<footer id = "rodape">
	<p>Ⓒ2021 TCC PROJECT | <a href = "https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:4aa1fd7b-93c8-4c96-833f-a13bca7ba5be" target = "_blank">TERMOS DE USO</a></p>
</footer>
</body>
</html>