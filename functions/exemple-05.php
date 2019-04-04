<?php

$a = 10;

function trocaValor($a){
    $a += 50;
    return $a;
}

echo $a;
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo $a;
echo "<br/>";

$b = 10;

function trocaValor2(&$b){
    $b += 50;
    return $b;
}

echo trocaValor2($b);
echo "<br/>";
echo $b;


?>