<?php
    include("./assets/scripts/php/checkSession.php");

    function createHeader(){
        $sessao = checkSession();

        if ($sessao != null) { 
            $listItem = "<li class='header__item'>Olá, $sessao</li>";
        } else {
            $listItem = "<li class='header__item'> Olá, faça o <a href='logar.php'class='header__link'>Login</a> ou <a href='registrar.php' class='header__link'>Registre-se</a></li>";
        }

        return "
            <header class='header'>
                <div class='header--container container-3'>
                    <div class='header--container--logo'>
                        <a href='servicos.php' class='footer__link'>
                            <img src='./assets/img/pacote.png' alt='Logo Serviço Fácil' class='header__logo'>
                        </a>
                    </div>
                    <div class='header--container--content'>
                        <ul class='header__list'>
                            <li class='header__item'><a href='error.php' class='header__link'>Início</a></li>
                            <li class='header__item'><a href='servicos.php' class='header__link'>Serviços</a></li>
                            <li class='header__item'><a href='servicos-status.php' class='header__link'>Status</a></li>
                            $listItem
                        </ul>
                    </div>
                </div>
            </header>
        ";
    }
?>