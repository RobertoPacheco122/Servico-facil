<?php
    include("./entities/Usuario.class.php");
    
    class Cliente extends Usuario {
        private $credito = 0;

        public function getCredito(){
            return $this->credito;
        }

        public function adicionarCredito($quantidade){
            $this->credito += $quantidade;
        }
    }
?>