<?php
////Bloco de conexão com o servidor////
$servername = "sql106.byetcluster.com";
$username = "b9_36110600";
$password = "b24ctk9h";
$dbname = "b9_36110600_siteone";
$conex = new mysqli($servername, $username, $password, $dbname);
if ($conex->connect_error){
  die("Conexão falhou: ");
}
/////////////////////////////////////
$it1 = $_COOKIE['it1'];
$it2 = $_COOKIE['it2'];
$it3 = $_COOKIE['it3'];
$it4 = $_COOKIE['it4'];
$it5 = $_COOKIE['it5'];
$it6 = $_COOKIE['it6'];
$it7 = $_COOKIE['it7'];
$it8 = $_COOKIE['it8'];
$it9 = $_COOKIE['it9'];

$cpf = $_COOKIE['cpf'];

$sql = "UPDATE compras SET it1='$it1', it2='$it2', it3='$it3', it4='$it4', it5='$it5', it6='$it6', it7='$it7', it8='$it8', it9='$it9' WHERE cpf='$cpf'";

if ($conex->query($sql)) {
    echo "<h1>Compra Realizada.</h1>";
    echo "<a href='index.html' style='color: black; text-decoration: none;'><h2><Retornar a Home.</h2></a>";
} else {
    echo "<h1>Erro na solicitação.</h1>";
    echo "<a href='index.html' style='color: black; text-decoration: none;'><h2><<Retornar a Home.</h2></a>";
}
$conex->close();
?>
