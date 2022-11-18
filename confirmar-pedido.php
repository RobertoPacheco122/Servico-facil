<?php
    include_once("./assets/scripts/php/myLibrary.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Serviço Fácil | Confirmar pedido</title>

        <link rel="stylesheet" href="./assets/css/basic-style.css">

        <link rel="stylesheet" href="./assets/css/confirm/style.css">
    </head>
    <body>
        <?php
            echo createHeader();
        ?>

        <main class="main">
            <section class="confirm">
                <div class="confirm--container container-3">
                    <div class="confirm--container--image">
                        <img src="./assets/img/confirmar-servico1.png" alt="" class="confirm__img">
                        <h1 class="confirm__title">Solicitação confirmada!</h1>
                        <p class="confirm__text">O seu pedido foi enviado ao prestador.</p>
                    </div>
                    <div class="confirm--container--content">
                        <h2 class="confirm__service"><span class="confirm__data">Número do pedido:</span> 6545165</h2>
                        <p class="confirm__service"><span class="confirm__data">Nome do prestador:</span> Rubinilson Evenildo</p>
                        <p class="confirm__service"><span class="confirm__data">E-mail:</span> Rubinilson@gmail.com</p>
                        <a href="servicos-status.php" class="confirm__link">Visualizar status dos seus serviços</a>
                    </div>
                </div>
            </section>
        </main>

        <?php
            echo createFooter();
        ?>
</body>
</html>