<?php

require_once("config.php");

echo session_save_path();
echo "<br/>";

var_dump(session_status());
echo "<br/>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "Desabilitado";
        break;
    case PHP_SESSION_NONE:
        echo "Habilitado, mas não existem";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Habilitado e existem";
        break;

}

?>