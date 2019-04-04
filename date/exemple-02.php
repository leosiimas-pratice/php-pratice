<?php

$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("+ 1 week");

echo $ts;
echo "<br/>";

echo date("l, d/m/Y", $ts);


?>