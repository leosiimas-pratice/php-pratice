<?php

$dataVencimento = strtotime("2019-01-02");
$dataEntrega = time();
$diasPassados = $dataEntrega - $dataVencimento;

$diaVencimento = date("d/m/Y", $dataVencimento);
$diaEntrega = date("d/m/Y");

echo "O dia de Vencimento é: " . $diaVencimento;
echo "<br/>";
echo "O dia de Hoje é: " . $diaEntrega;
echo "<br/><br/>";

if ($diaVencimento == $diaEntrega ) {
    echo "Seu Carro Vence Hoje";
} elseif($dataVencimento < $dataEntrega){
    
    $diasAtrasados =  $dataEntrega - $dataVencimento;
    $diasAtrasados = $diasAtrasados/86400;
        if($diasAtrasados < 2){
            echo "Seu Carro esta: 1 dia atrasado!";
        }else{
            echo "Seu Carro esta: ". (int)$diasAtrasados ." dias atrasados!";
        }    
}else{
    
    $diasFaltam = $dataVencimento - $dataEntrega;
    $diasFaltam = $diasFaltam/86400;
    if($diasFaltam < 1){
        echo "Falta 1 dia para seu carro venceer";
    }else{
        echo "Seu carro esta em dia e faltam: " . (int)$diasFaltam . " dias para vencer";
    }
    
}
?>