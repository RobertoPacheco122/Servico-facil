<?php
    include "entities/Servico.class.php";

    $servico0 = new Servico("default","Selecione um tipo de serviço",0);
    $servico1 = new Servico("Marcenaria","Reparo de vazamentos",99.99);
    $servico2 = new Servico("Marcenaria","Roubar água do vizinho",85.59);
    $servico3 = new Servico("Marcenaria","Roubar água da rua",55.70);
    $servicosHidraulico = array($servico0,$servico1,$servico2,$servico3);
 
    function exibirServicos($servicos) {
        for ($i = 0; $i <count($servicos); $i++) {
            echo "<option value='$i'>".$servicos[$i]->getServico()."</option>";
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Fácil | Hidráulico</title>

    <link rel="stylesheet" href="assets/css/basic-style.css">
    <link rel="stylesheet" href="assets/css/servicesphp/style.css">
</head>
<body>
    <header class="header">
        <div class="header--container container-3">
            <div class="header--container--logo">
                <img src="./assets/img/pacote.png" alt="Logo Serviço Fácil" class="header__logo">
            </div>
            <div class="header--container--content">
                <ul class="header__list">
                    <li class="header__item"><a href="error.html" class="header__link">Início</a></li>
                    <li class="header__item"><a href="registrar.html" class="header__link">Registrar-se</a></li>
                    <li class="header__item"><a href="error.html" class="header__link">Entrar</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="call">
        <div class="call--container container-3">
            <div class="call--container--content">
                <h1 class="call__title">Em busca de profissionais em Hidráulica ?</h1>
                <p class="call__subtitle">Encontre no Serviço Fácil o profissional perfeito para sua necessidade.</p>
                <ul class="call__list">
                    <li class="call__item">
                        <i class="call__icon icon icon--shield"></i>
                        <p class="call__text">Garantimos a sua segurança</p>
                    </li>
                    <li class="call__item">
                        <i class="call__icon icon icon--star"></i>
                        <p class="call__text">Os melhores profissionais há um clique de distância</p>
                    </li>
                    <li class="call__item">
                        <i class="call__icon icon icon--money"></i>
                        <p class="call__text">Preços que cabem no seu bolso</p>
                    </li>
                </ul>
            </div>
            <div class="call--container--image">
                <img src="./assets/img/services2.jpg" alt="Homens apertando as mãos" class="call__img">
            </div>
        </div>
    </section>
    <section class="services">
        <div class="services--container container-3">
            <h1 class="services__title">Serviços de Hidráulica</h1>
            <form action="servicos-confirmar.php" method="post" class="services__form">
                <select name="servicos" id="servicos" class="services__select">
                    <?php
                        exibirServicos($servicosHidraulico);
                    ?>
                </select>
                <div class="services--container--date">
                    <label for="data" class="services__label">Selecione a data do serviço:</label>
                    <input type="date" name="data" id="data" class="services__input services__input--date">
                </div>
                <div class="services--container--time">
                    <label for="horario" class="services__label">Selecione o horário do serviço:</label>
                    <input type="time" name="horario" id="horario" class="services__input services__input--time">
                </div>
                <div class="services--container--submit">
                    <input type="submit" value="Escolher serviço" class="services__input--submit">
                </div>
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="footer--container container-3">
            <header class="footer__header">
                <img src="./assets/img/pacote.png" class="footer__logo" alt="Logo do Serviço Fácil">
            </header>
            <section class="footer--container--content">
                <div class="footer__about footer__about--empresa">
                    <h1 class="footer__title footer__title--company">Empresa</h1>
                    <nav class="footer__nav">
                        <a href="error.html" class="footer__link">Sobre</a>
                        <a href="error.html" class="footer__link">Empregos</a>
                    </nav>
                </div>
                <div class="footer__about footer__about--communities">
                    <h1 class="footer__title footer__title--communities">Comunidades</h1>
                    <nav class="footer__nav">
                        <a href="error.html" class="footer__link">Para Artistas</a>
                        <a href="error.html" class="footer__link">Desenvolvedores</a>
                        <a href="error.html" class="footer__link">Publicidade</a>
                        <a href="error.html" class="footer__link">Investidores</a>
                    </nav>
                </div>
                <div class="footer__about footer__about--links">
                    <h1 class="footer__title footer__title--links">Links úteis</h1>
                    <nav class="footer__nav">
                        <a href="error.html" class="footer__link">Suporte</a>
                        <a href="error.html" class="footer__link">Aplicativo móvel grátis</a>
                    </nav>
                </div>
            </section>
            <section class="footer--container--medias">
                <ul class="footer__list--socials">
                    <li class="footer__item--socials footer__item--instagram">
                        <a href="#" class="footer__link--socials footer__link--instagram">
                            <i class="footer__icon icon icon--instagram"></i>
                        </a>
                    </li>
                    <li class="footer__item--socials footer__item--twitter">
                        <a href="#" class="footer__link--socials footer__link--twitter">
                            <i class="footer__icon icon icon--twitter"></i>
                        </a>
                    </li>
                    <li class="footer__item--socials footer__item--facebook">
                        <a href="#" class="footer__link--socials footer__link--facebook">
                            <i class="footer__icon icon icon--facebook"></i>
                        </a>
                    </li>
                </ul>
            </section>
            <section class="footer--container--country">
                <p class="footer__text footer__text--country">&#127758; Brasil</p>
            </section>
            <section class="footer--container--infos">
                <ul class="footer__list--infos">
                    <li class="footer__item--infos">
                        <a href="error.html" class="footer__link footer__link--infos">Legal</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.html" class="footer__link footer__link--infos">Centro de Privacidade</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.html" class="footer__link footer__link--infos">Política de Privacidade</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.html" class="footer__link footer__link--infos">Cookies</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.html" class="footer__link footer__link--infos">Sobre Anúncios</a>
                    </li>
                </ul>
                <div class="footer--container--rights">
                    <p class="footer__text footer__text--rights">&copy; 2022 Serviço Fácil</p>
                </div>
            </section>
        </div>
    </footer>
</body>
</html>