<?php
    include("entities/Database.class.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    session_start();

    if(Database::authenticateUser($email, $password) != null) {
        $_SESSION["user"] = Database::getUserName(Database::getUserId($email, $password)); 
        header("location: servicos.php");
    } else {
        $_SESSION["flash"] = "Email ou Senha incorreto. Tente novamente.";
        header("location: logar.php");
    }