<?php
    include("entities/Database.class.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    session_start();

    if(Database::authenticateUser($email, $password) != null) {
        $_SESSION["userId"] = Database::getUserId($email, $password);
        $_SESSION["user"] = Database::getUserName($_SESSION["userId"]);
        header("location: servicos.php");
    } else {
        $_SESSION["flash"] = "Email ou Senha incorreto. Tente novamente.";
        header("location: logar.php");
    }