<?php 

    class Veiculo {

        public $modelo;
        public $cor;
        public $ano;

        public function Andar() {
            echo "Andou";
        }

        public function Parar() {
            echo "Parou";
        }

    }

    class Carro extends Veiculo{

        public function limparParabrisa() {
            echo "ligando limpa-vidros";
        }

    }

    class Moto extends Veiculo{
        
        public function DarGrau() {
            echo "ran dan dan dan dan dan dan";
        }

    }

    $carro = new Carro();
    $carro->modelo = "Gol";
    $carro->cor = "Branco";
    $carro->ano = 1999;
    $carro->Andar();  
    $carro->limparParabrisa();
    var_dump($carro);

    $moto = new Moto();
    $moto->modelo = "CG150";
    $moto->cor = "Preta";
    $moto->ano = 2007;
    $moto->DarGrau();
    var_dump($moto);

?>