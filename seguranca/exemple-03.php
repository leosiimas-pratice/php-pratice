<?php

$pasta = "arquivos";

if (!is_dir($pasta )) mkdir ($pasta);

$permissao = "0775";

echo "Diretorio criado com sucesso!";

?>