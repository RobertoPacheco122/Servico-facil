<?php
    require_once("./entities/Usuario.class.php");

    class Prestador extends Usuario {
        private $tipoServico;

        public function __construct($nome, $sobrenome, $email, $senha, $tipoUsuario, $tipoServico){
            parent::__construct($nome, $sobrenome, $email, $senha, $tipoUsuario);
            $this->tipoServico = $tipoServico;
        }

        public function getTipoServico() {
            return $this->tipoServico;
        }
        public function setTipoServico ($tipoServico) {
             $this->tipoServico = $tipoServico;
        }
    }
?>