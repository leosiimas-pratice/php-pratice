<?php

$nome = "Leonardo";

function teste(){

    global $nome;
    echo $nome;

}

function teste2(){

    $nome = "Abreu";
    echo $nome." Agora no teste 2";

}

teste();
echo "<br/>";
teste2();
echo "<br/>";
echo $nome;

?>