<?php

class Login {
    
    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {

        if($this->email == "Teste@gmail.com" and $this->senha == "teste123"):
            echo "Logado com sucesso";
        else:
            echo "Erro! Dados Invalidos";
        endif;
    }
}

$logar = new Login();
$logar->setEmail("Teste///@gmail.com");
$logar->setSenha("teste123");
$logar->Logar();
echo "<br>";
echo "Email:  ". $logar->getEmail();
echo "<br>";
echo "Senha:  ". $logar->getSenha();

?>