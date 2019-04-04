<?php

$name = "images";

if(!is_dir($name)){

    mkdir($name);
    echo "Diretorio $name Criado com sucesso!";
}else{

    echo "Diretorio ja Existe: $name";
    rmdir($name);
    echo "Diretorio $name foi deletado";
}

?>