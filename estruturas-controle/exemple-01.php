<?php

$qualASuaIdade = 150;

$idadeCrianca = 12;
$idadeAdolecente = 18;
$idadeAdulto = 40;
$idadeIdoso = 65;

if ($qualASuaIdade < $idadeCrianca ){
    echo "É Criança";

}else if ($qualASuaIdade < $idadeAdolecente ){
    echo "É Adolecente";

}else if ($qualASuaIdade < $idadeAdulto ){
    echo "É Adulto";

}else{
    echo "É Idoso";

}

echo"<br/>";

echo ($qualASuaIdade < $idadeAdolecente) ? "Menor de idade" : "Maior de idade" 

?>