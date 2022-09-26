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
    <title>Serviço Fácil | Em construção</title>

    <link rel="stylesheet" href="./assets/css/basic-style.css">

    <link rel="stylesheet" href="./assets/css/error/style.css">
</head>
<body>
    <?php
        echo createHeader();
    ?>

    <main class="main">
        <section class="error">
            <div class="error--container container-3">
                <img src="./assets/img/construcao.png" alt="Parede de tijolos" class="error__img">
                <h1 class="error__title">Desculpe pelo transtorno!</h1>
                <p class="error__text">Esta página se encontra em construção. Retorne novamente no futuro.</p>
                <a href="./servicos.php" class="error__link">Ir a página de Serviços</a>
            </div>
        </section>
    </main>

    <?php
        echo createFooter();
    ?>
</body>
</html>