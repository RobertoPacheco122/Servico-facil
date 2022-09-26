<?php
    function criarCabecalho(){
        return "
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
        ";
    }
?>