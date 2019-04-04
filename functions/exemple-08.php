<?php

function soma(float ...$valores):float{

    return array_sum($valores);

}

echo var_dump(soma(2,2));
echo "<br/>";

echo soma(2,2,3,5);
echo "<br/>";

echo soma(2,2.2);
echo "<br/>";

?>