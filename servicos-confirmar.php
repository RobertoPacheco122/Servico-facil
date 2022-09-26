<?php
    include "entities/Servicos.class.php";
    include "entities/Servico.class.php";
    include "./assets/scripts/php/createHeader.php";
    include "./assets/scripts/php/createFooter.php";

    //$servico = $_REQUEST["servicos"];

    /* $cabecalho = "
        <header class='header'>
            <div class='header--container container-3'>
                <div class='header--container--logo'>
                    <img src='./assets/img/pacote.png' alt='Logo Serviço Fácil' class='header__logo'>
                </div>
                <div class='header--container--content'>
                    <ul class='header__list'>
                        <li class='header__item'><a href='error.html' class='header__link'>Início</a></li>
                        <li class='header__item'><a href='registrar.html' class='header__link'>Registrar-se</a></li>
                        <li class='header__item'><a href='#' class='header__link'>Entrar</a></li>
                    </ul>
                </div>
            </div>
        </header>
    "; */
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo criarCabecalho();
            echo criarRodape();
        ?>
    </body>
</html>