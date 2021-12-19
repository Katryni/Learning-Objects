
<?php
   $nome = $_POST['t-nome'];
   $senha = $_POST['t-senha'];
   $login = $_POST['t-login'];
	$celular = $_POST['tcelular'];
	
   include "inc_dbConexao.php";
   
    $sql = "INSERT INTO	administrador";
    $sql = $sql ."(";
    $sql = $sql ." nome,";
    $sql = $sql ." senha,";
    $sql = $sql ." login, ";
    $sql = $sql ." celular, ";
	
	$sql = $sql ." )";
    $sql = $sql ." Values ";
    $sql = $sql ." ( ";
    $sql = $sql ." '".$nome."',";
	$sql = $sql ." '".$login."',";
    $sql = $sql ." '".$celular."',";
    $sql = $sql ." '".$senha."',";
    $sql = $sql ." )";


   
   // echo $sql;
	$rs = mysqli_query($conexao,$sql);
    if(!$rs)
    {
         echo $sql;
         echo 'Problemas na gravacao, avise o suporte'; 
         echo '<meta http-equiv="refresh" content="10;URL=cadastro.html" />';
         return;
    }
    mysqli_close($conexao);
	echo "<br>Gravação Executada com sucesso";
?>
gravacao.php
Displaying gravacao.php.