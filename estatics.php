<?php 

    class Login {

        public static $user;
        
        public static function verificaLogin() {
            echo "o usuario  ".self::$user."  esta logado!" ;
        }
    }

Login::$user = "Kauã";
Login::verificaLogin();

?>