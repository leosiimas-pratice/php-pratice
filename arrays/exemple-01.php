<?php

$frutas = array("Laranja", "Abacaxi", "Melancia");

print_r ($frutas);
echo "<br/>";
echo "<br/>";
echo "<br/>";

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fusion";
$carros[1][2] = "Fieste";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
echo "<br/>";
echo end($carros[1]);
echo "<br/>";
echo end($carros[0]);
echo "<br/>";
echo "<br/>";
echo "<br/>";

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoas, array(
   'nome'=>'Leonardo',
    'idade'=>25
));

print_r($pessoas);
echo "<br/>";

print_r($pessoas[0]['nome']);

?>