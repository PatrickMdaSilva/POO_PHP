<?php
require_once("conexao.php");

// Campos Recebidos por post

$email = $_POST["email"];
$password = $_POST["password"];
$chave = $_POST["chave"];


$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

$stmt = $conn->prepare("UPDATE * FROM users 
WHERE email = :email 
");

$stmt->bindValue(":email", $email);
$stmt->bindValue(":password", $password);
$stmt->execute();
echo "<br>";

if (($stmt) && ($stmt->rowCount() != 0) && ($stmt->rowCount() < 2)) {
  echo "Login efetuado com sucesso";
}else {
  echo "Conexao falhou";
}
