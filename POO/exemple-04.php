
<?php

class Endereco{

    private $logadouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        
        $this->logadouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __toString()
    {
        return $this->logadouro.", ".$this->numero." - ".$this->cidade;
    }


    public function __destruct()
    {
        var_dump("DESTRUIR");
    }

}

$meuEndereco = new Endereco("Rua José Domingos Varella", "154", "Porto Alegre");

var_dump($meuEndereco);
echo "<br/>";
echo $meuEndereco;
echo "<br/>";
unset($meuEndereco);



?>