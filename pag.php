<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$pass = $_POST['pass'];
echo "<h1>Dados do usuário:</h1>";
echo "<label>Nome:</label>";
echo "<span> ".$nome."</span></br>";
echo "<label>Tel:</label>";
echo "<span>".$cpf."</span></br>";
echo "<label>Endereço:</label>";
echo "<span>".$email."</span></br>";
echo "<label>Email:</label>";
echo "<span>".$pass."</span></br>";
?>;