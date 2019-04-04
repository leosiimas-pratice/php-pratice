<?php

$nome = (int)$_GET["a"];

var_dump($nome);

echo "<br/>";
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br/>";
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;


?>