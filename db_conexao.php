<?PHP
$conexao = mysqli_connect("localhost","root","");
$bancodedados = "info2018";
$db = mysqli_select_db($conexao,$bancodedados);
if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    die();
}
?>