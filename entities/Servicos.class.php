<?php
    class Servicos {

        private $servicos = array();
         
        public function adicionarServico($servico) {
            array_push($servicos,$servico);
        }
        public function setServicos($servicos) {
            $this->servicos=$servicos;
        }
    }

?>