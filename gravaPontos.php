
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("game");

if(isset($_GET['nome']) && isset($_GET['pontos']))
{
     $nome = strip_tags(mysql_real_escape_string($_GET['nome']));
     $pontos = strip_tags(mysql_real_escape_string($_GET['pontos']));
     $sql = mysql_query("INSERT INTO pontos(nome, ponto) values('$nome', '$pontos')");
}
mysql_close($conn);
?>
