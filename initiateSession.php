<?php
    include("entities/Database.class.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    session_start();

    if(Database::authenticateUser($email, $password) != null) {
        $_SESSION["user"] = Database::getUserName(Database::getUserId($email, $password)); 
        //$_SESSION["user"] = "Roberto";
        header("location: servicos.php");
    } else {
        $_SESSION["flash"] = "Email ou Senha incorreto. Tente novamente.";
        echo $_SESSION["flash"];
        header("location: logar.php");
    }