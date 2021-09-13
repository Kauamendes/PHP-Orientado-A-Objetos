<?php 

    class Pessoa {
        const nome = "Kauã";

        public function exibirNome() {
            echo self::nome;
        }
    }

    class Kaua extends Pessoa {
        const nome = "Mendes";

        public function exibirNome() {
            echo parent::nome. " ";
            echo self::nome;
        }
    }

$kaua = new Kaua();
$kaua->exibirNome();

?>