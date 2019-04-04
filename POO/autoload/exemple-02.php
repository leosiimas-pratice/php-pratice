<?php

function incluirClasses($nomeClasse){

    $classe = $nomeClasse.".php";
    
    if(file_exists($classe)  === true){

        require_once($classe);
    }
    
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php")  == true){

        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});

$carro = new DelRey();

$carro->acelerar(200);

?>