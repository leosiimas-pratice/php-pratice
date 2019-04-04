<?php

require_once("config.php");

echo session_id();
echo "<br/>";

echo session_id();
echo "<br/>";

session_regenerate_id();

echo session_id();
var_dump($_SESSION)

?>