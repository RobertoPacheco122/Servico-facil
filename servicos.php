<?php
    include "./assets/scripts/php/createHeader.php";
    include "./assets/scripts/php/createFooter.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Fácil | Serviços</title>

    <link rel="stylesheet" href="./assets/css/basic-style.css">
    <link rel="stylesheet" href="./assets/css/servicos/style.css">
</head>
<body>
    <?php
        echo createHeader();
    ?>

    <main class="main">
        <section class="call">
            <div class="call--container container-3">
                <div class="call--container--content">
                    <h1 class="call__title">Buscando por profissionais dos mais variados campos ?</h1>
                    <p class="call__subtitle">Nós reunimos todos eles em um só lugar</p>
                    <form action="error.php" method="get" class="call__form">
                        <input type="text" placeholder="Procure pelo serviço ideal" class="call__input call__input--text">
                        <input type="submit" value="Buscar" class="call__input call__input--submit">
                    </form>
                </div>
                <div class="call--container--image">
                    <img src="./assets/img/services1.jpg" alt="Homens apertando as mãos" class="call__img">
                </div>
            </div>
        </section>
        <section class="services">
            <div class="services--container container-3">
                <h1 class="services__title">Selecione um tipo de serviço</h1>
                <ul class="services__list">
                    <li class="services__item">
                        <a href="marcenaria.php" class="services__link">
                            <i class="services__icon icon icon--lime"></i>
                            <p class="services__text">Marcenaria</p>
                        </a>
                    </li>

                    <li class="services__item">
                        <a href="chaveiro.php" class="services__link">
                            <i class="services__icon icon icon--keychain"></i>
                            <p class="services__text">Chaveiro</p>
                        </a>
                    </li>
                        
                    <li class="services__item">
                        <a href="hidraulico.php" class="services__link">
                            <i class="services__icon icon icon--pipe"></i>
                            <p class="services__text">Bombeiro Hidráulico</p>
                        </a>
                    </li>

                    <li class="services__item">
                        <a href="eletricista.php" class="services__link">
                            <i class="services__icon icon icon--circuit"></i>
                            <p class="services__text">Eletricista</p>
                        </a>
                    </li>

                    <li class="services__item">
                        <a href="arcondicionado.php" class="services__link">
                            <i class="services__icon icon icon--airconditioning"></i>
                            <p class="services__text">Ar Condicionado</p>
                        </a>
                    </li>    
                </ul>
            </div>
        </section>
    </main>

    <?php
        echo createFooter();
    ?>  
</body>
</html>