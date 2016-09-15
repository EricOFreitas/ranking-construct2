<?php
  header('Access-Control-Allow-Origin: *');

  $conn = mysql_connect("localhost","root","");
  $db = mysql_select_db("game");

  $sql="SELECT * FROM pontos	ORDER BY ponto DESC limit 5 ";
  $result=mysql_query($sql);

  while($rows=mysql_fetch_array($result)){
  	echo $rows['nome'] . "|" . $rows['ponto'] . "|";
  }
  mysql_close();
?>
