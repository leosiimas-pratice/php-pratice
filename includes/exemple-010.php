<?php

// Funciona mesmo que o arquivo não exista ou com erros
// Da acesso o path, pasta do PHP e também include dinamico(péssimo)
//include "exemple-011.php";

// Obrigatório que o arquivo exista e esteja funcionando perfeitamente
//require "exemple-011.php";

// melhor opçao, pois só inclui uma vez
require_once "exemple-011.php";

$resultado = somar(10, 20);
echo $resultado;

?>