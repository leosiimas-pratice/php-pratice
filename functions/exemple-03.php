<?php

function ola($texto="Mundo", $periodo="Bom Dia"){
    return "Olá Mundo $texto $periodo!<br/>";
}

echo ola();
echo ola("Leonardo");
echo ola("Leonardo", "Boa Noite");
echo ola("Leonardo", "");

?>