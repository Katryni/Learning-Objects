<?php
include_once('settings.php');

$nome = $_POST['descricao'];
$data = $_POST['data'];
$postador = $_POST['postador'];
$fonte = $_POST['fonte'];
$diretorio = $_POST['video'];
$diretorio2 = $_POST['arquivo'];
$tipo = $_POST['tipo'];
$secao = $_POST['secao'];
$texto =$_POST['cont'];

$query_select_1 = "SELECT descricao FROM conteudo WHERE descricao = $nome";
$query_select_2 = "SELECT dataCadastro FROM conteudo WHERE dataCadastro = $data";
$query_select_3 = "SELECT idAdmin FROM conteudo WHERE idAdmin = $postador";
$query_select_4 = "SELECT fonte FROM conteudo WHERE fonte = $fonte";
$query_select_5 = "SELECT diretorio FROM conteudo WHERE diretorio = $diretorio";
$query_select_6 = "SELECT diretorio_img FROM conteudo WHERE diretorio_img = $diretorio2";
$query_select_7 = "SELECT idTipo FROM conteudo WHERE idTipo = $tipo";
$query_select_8 = "SELECT idSecao FROM conteudo WHERE idSecao = $secao";
$query_select_9 = "SELECT pDiscursiva FROM conteudo WHERE pDiscursiva = $texto";

$select = mysqli_query($connect,$query_select_1);
$array = mysqli_fetch_array($connect,$select);	
$query = "INSERT INTO conteudo (descricao,dataCadastro,idAdmin,fonte,idTipo,idSecao,diretorio,diretorio_img,pDiscursiva) VALUES ('$nome','$data',$postador,'$fonte',$tipo,$secao,'$diretorio','$diretorio2','$texto')";
$result = mysqli_query($connect,$query);

if($result) {
	echo"<script language = 'javascript' type = 'text/javascript'>alert('Conteúdo cadastrado com sucesso 😎');windows.location.href = 'painel.php';</script>";
	die();
}else {
	echo"<script language = ' javascript' type = ' text/javascript'> alert('Não foi possível cadastrar esse conteúdo 😩');windows.location.href = 'painel.php';</script>";
}
?>
