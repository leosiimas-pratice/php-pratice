<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "123456");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Leonardo";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido";

?>