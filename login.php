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


$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro WHERE nome='$nome';";

$result = $conex->query($sql);

if ($result->num_rows > 0) {
  $dados = $result->fetch_assoc();
  $verifSenha = $dados['senha'];
  $sql = "SELECT * FROM cadastro WHERE senha='$senha';";
  $result = $conex->query($sql);
  if($result->num_rows > 0){
    $dados = $result->fetch_assoc();
    if ($verifSenha == $dados['senha']) {
      echo "Login efetuado com sucesso.<br>";
      echo "<h2>Dados do usuário</h2>";
      echo "Nome: ".$dados['nome'].'<br>';
      echo "CPF: ".$dados['cpf'].'<br>';
      echo "Senha: ".$dados['senha'];
      setcookie('nome', $login);
      $_SESSION['cpf'] = $dados['cpf'];
      echo "<form action='deletar.php' method='post'><button>Apagar cadastro</button>";
    }
    else{
      echo "Login ou senha errada.";
    }
  }
  else {
    echo "Login ou senha errada.";
  }
} 
else {
  echo "Login ou senha errada.";
}
$conex->close();
?>