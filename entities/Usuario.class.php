<?php
    class Usuario {
        private $nome;
        private $sobrenome;
        private $email;
        private String $senha;
        private $tipoUsuario;

        public function __construct($nome, $sobrenome, $email, $senha, $tipoUsuario){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->email = $email;
            $this->senha = $senha;
            $this->tipoUsuario = $tipoUsuario;
        }

        public function getNome() {
            return $this->nome;
        }
        public function getSobrenome() {
            return $this->sobrenome;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getSenha() {
            return $this->senha;
        }
        public function getTipoUsuario() {
            return intval($this->tipoUsuario);
        }


        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setSobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function setSenha($senha) {
            $this->senha = $senha;
        }
        public function setTipoUsuario($tipoUsuario) {
            $this->tipoUsuario = $tipoUsuario;
        }

    }
?>