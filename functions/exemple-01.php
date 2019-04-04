<?php

function ola(){
    return "Olá Mundo!<br/>";
}

echo ola();
echo ola();
echo ola();

$frase =  ola();
echo strlen($frase);
echo "<br/>";

echo strlen(ola());

?>