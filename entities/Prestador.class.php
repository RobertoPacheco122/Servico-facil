<?php
    include("./entities/Usuario.class.php");

    class Prestador extends Usuario {
        private $tipoServico;

        public function getTipoServico() {
            return $this->tipoServico;
        }
        public function setTipoServico ($tipoServico) {
             $this->tipoServico = $tipoServico;
        }
    }
?>