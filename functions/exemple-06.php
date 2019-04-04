<?php

$pessoa = array(
    'nome'=>'Leonardo',
    'idade'=>23
);

foreach ($pessoa as &$value){

    if(gettype($value) === 'integer') $value += 10;
    echo $value.'<br/>';
}

print_r($pessoa);

?>