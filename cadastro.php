<?php

$servername = "sql106.byetcluster.com";
$username = "b9_36110600";
$password = "b24ctk9h";
$dbname = "b9_36110600_siteone";
$conex = new mysqli($servername, $username, $password, $dbname);
if ($conex->connect_error) {
  die("Conexão falhou: " . $conex->connect_error);
}

//$nome = 'ricardo';
//$cpf = '44144244344';
//$senha = 'bananinha';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$sql = "INSERT INTO cadastro (nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";

if ($conex->query($sql) === TRUE) {
  echo "Cadastro feito e com sucesso.";
}
else{
  echo "Deu ruim mano.";
}

$conex->close();
?>