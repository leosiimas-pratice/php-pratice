<?php

$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";

$q = strpos($frase, "mãe");

var_dump($q);
echo "<br/>";
echo $q;
echo "<br/>";

$texto = substr($frase,0, $q);
echo $texto;
echo "<br/>";

$texto = substr($frase, $q);
echo $texto;
echo "<br/>";


$texto = substr($frase, $q + strlen($palavra), strlen($frase));
echo $texto;
echo "<br/>";

?>