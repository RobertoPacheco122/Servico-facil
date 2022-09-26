<?php
    include "entities/Servico.class.php";
    include "./assets/scripts/php/createHeader.php";
    include "./assets/scripts/php/createFooter.php";
    include "./assets/scripts/php/showSerivce.php";

    $servico0 = new Servico("default","Selecione um tipo de serviço",0);
    $servico1 = new Servico("Chaveiro","Arrombamento de porta",99.99);
    $servico2 = new Servico("Chaveiro","Cópia de chave",85.59);
    $servicosChaveiro = array($servico0,$servico1,$servico2);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Fácil | Chaveiro</title>

    <link rel="stylesheet" href="assets/css/basic-style.css">
    <link rel="stylesheet" href="assets/css/servicesphp/style.css">
</head>
<body>
    <?php
        echo createHeader();
    ?>     

    <section class="call">
        <div class="call--container container-3">
            <div class="call--container--content">
                <h1 class="call__title">Em busca de profissionais em Chaveiro ?</h1>
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
            <h1 class="services__title">Serviços de Chaveiro</h1>
            <form action="servicos-confirmar.php" method="post" class="services__form">
                <select name="servicos" id="servicos" class="services__select">
                    <?php
                        showServices($servicosChaveiro);
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
    
    <?php
        echo createFooter();
    ?>
</body>
</html>