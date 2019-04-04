<?PHP

class Pessoa {
    
    public $nome;

    public function falar(){

        return "O meu nome é: ".$this->nome;
    }

}

$leonardo = new Pessoa();
$leonardo->nome = "Leonardo Abreu";
echo $leonardo->falar();

?>