<?php

$a = NULL;
$b = NULL;
$c = 8;

echo $a ?? $b ?? $c;
echo "<br/>";

$b = 10;

echo $a ?? $b ?? $c;
echo "<br/>";

?>