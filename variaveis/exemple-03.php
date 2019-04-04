<?php

$nome = "Hcode";
$site = "www.hcode.com.br";

$ano = 1990;
$salario = 5500.99;
$bloquado = false;
//////////////////////////

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

echo "<br/>";

$nascimento = new DateTime();

var_dump($nascimento);

echo "<br/>";
//////////////////////////

$arquivo = fopen("exemple-03.php", "r");

var_dump($arquivo);

echo "<br/>";

$nulo = null;

?>