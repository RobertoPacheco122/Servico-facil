<?php
    class Servico {
        private $tipoServico;
        private $servico;
        private $preco;

        public function __construct($tipoServico, $servico, $preco){
            $this->tipoServico = $tipoServico;
            $this->servico = $servico;
            $this->preco = $preco;
        }

        public function getTipoServico() {
            return $this->tipoServico;
        }
        public function getServico() {
            return $this->servico;
        }
        public function getPreco() {
            return $this->preco;
        }

        public function setTipoServico($tipoServico) {
            $this->tipoServico = $tipoServico;
        }
        public function setServico($servico) {
            $this->servico = $servico;
        }
        public function setPreco($preco) {
            $this->preco = $preco;
        }
    }
?>