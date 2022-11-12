<?php

function getRegisterData(){
    $nome = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    $servico = $_POST["service"];

    if($servico == null) {
        $user = new Cliente($nome, $lastname, $email, $senha, 1);
    } else {
        $user = new Prestador($nome, $lastname, $email, $senha, 2, $servico);
    }

    return $user;
}