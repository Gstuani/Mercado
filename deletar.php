<?php
session_start();
$servername = "sql106.byetcluster.com";
$username = "b9_36110600";
$password = "b24ctk9h";
$dbname = "b9_36110600_siteone";
$conex = new mysqli($servername, $username, $password, $dbname);
if ($conex->connect_error) {
  die("Conexão falhou: " . $conex->connect_error);
}

$cpf = $_SESSION['cpf'];

 
// sql to delete a record

 $sql = "DELETE FROM cadastro WHERE cpf = '$cpf'";

 
if ($conn->query($sql) === TRUE) {
  echo "goodbye jojo";
} else {

    echo "deu bosta deletendo o negocio tlg: " . $conn->error;
}

$conn->close();

?>