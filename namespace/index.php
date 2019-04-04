<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Leonardo Abreu");
$cad->setEmail("abreu@abreu.com");
$cad->setSenha("123456");

echo $cad;
echo "<br/><br/>";

$cad->registrarVenda();


?>