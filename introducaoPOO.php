<?php 

//criando classes
class Pessoa {

    //criando atributos
    public $nome;
    public $idade;

    //criando metodos
    public function Falar() {
        echo "Meu nome é ". $this->nome. " e tenho ". $this->idade. " anos";

    }
}

$kaua = new Pessoa();
$kaua->nome = "Kauã";
$kaua->idade = 17;
$kaua->Falar();

?>