<?php

$anoNacimento = 1990;

$nome = "Leo";

//Exemplo de Comentario em linha em PHP

/*
Exemplo de comentario
com varias linhas em PHP
*/

echo $nome;

echo "<br/>";

//unset($nome);

if (isset($nome)) {

    echo $nome;
}

echo "<br/>";

$sobrenome = "Abreu";


$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

?>