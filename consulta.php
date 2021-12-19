<?php   
    include "settings.php";

    $sql = "Select * from conyeudo ";
    $rs = mysqli_query($connect,$sql);
    $total_registros = mysqli_num_rows($rs);
?>
<!DOCTYPE HTML> <!-- PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//PT" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estiloresponsivo.css">
        <link rel="stylesheet" href="css/index-grid.css">
        <script language="Javascript">
            function confirmacao(id,nome) {
            var resposta = confirm("Deseja remover "+nome+"?");
             if (resposta == true) {
                  window.location.href = "exclui1.php?id="+id;
            }
        }
        </script>
	<style>
		body {
			background-color:rgb(242, 235, 216);
		}
		ul#secao  {
			text-decoration: none;
			list-style: none;
			font-size:20px;
			font-family: arial, helvetica, sans-serif;
		}
		li {
			padiing: 2px;
		}
		ul#secao li a{
			text-decoration:none;
			display: block;
		}
		label {
			font-family:arial, helvetica, sans-serif;
			font-size:12pt;
		}
		div#painel {
			margin-top: 0px;
			padding-top: 0px;
			float: center;
		}
	</style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body>
        <h1> Relação de Conteúdos </h1>
        <table cellspacing="0" border ="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Postador</th>
                    <th>Fonte</th>
					<th>Tipo(s)</th>
					<th>Seção</th>
					<th>Diretório</th>
					<th>Texto</th>
                </tr>
            </thead>
            <?PHP
                while ($reg=mysqli_fetch_array($rs))
                {
                    $nome = $reg["descricao"];
                    $data = $reg["dataCadastro"];
                    $postador = $reg["idAdmin"];
                    $fonte = $reg["fonte"];
					$tipo = $reg["idTipo"];
					$secao = $reg["idSecao"];
					$diretorio = $reg["diretorio"];
					$texto = $reg["pDiscursiva"];

            ?>
            <tr>
            <td><?PHP print $nome; ?></td>
            <td><?PHP print $data; ?></td>
            <td><?PHP print $postador?></td>
			<td><?PHP print $fonte?></td>
			<td><?PHP print $tipo?></td>
			<td><?PHP print $secao?></td>
			<td><?PHP print $diretorio?></td>
			<td><?PHP print $texto?></td>
            <td>
               <div align="right">
                <a href="altera.php><img src="" alt="Alterar Registro" border="0"></a>

              <a href="exclui1.pqrrhp?id=<?PHP print $id; ?>"><img src="img/btn_excluir2.gif" alt="Excluir Registro" border="0"></a> 
                </div>
            </td>
            </tr>
            <?PHP
                }
             ?>
        </table>
    </body>
</html>
<?PHP
             mysqli_free_result($rs);
             mysqli_close($connect);
?>