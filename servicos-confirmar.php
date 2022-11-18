<?php
    include_once("./assets/scripts/php/myLibrary.php");
    include_once("./entities/Database.class.php");

    session_start();

    $solicitation = Database::getLastSolicitation($_SESSION['userId']);
    $userCredit = Database::getUserCredit($_SESSION['userId']);
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

                <?php 
                    echo "
                        <div class='confirm--container--image'>
                            <img src='./assets/img/confirmar-servico1.png' alt='' class='confirm__img'>
                            <h1 class='confirm__title'>Falta pouco!</h1>
                            <p class='confirm__text'>Revise os dados antes de confirmar a solicitação.</p>
                        </div>
                        <div class='confirm--container--content'>
                            <p class='confirm__service'><span class='confirm__data'>Serviço:</span> " . $solicitation['tipo_servico'] . "</p>
                            <h2 class='confirm__service'><span class='confirm__data'>Tipo de serviço:</span> " . $solicitation['servico'] . " </h2>
                            <p class='confirm__service'><span class='confirm__data'>Preço:</span> R$" . $solicitation['preco'] . "</p>
                            <p class='confirm__service'><span class='confirm__data'>Crédito :</span> R$" . $userCredit . "</p>
                            <p class='confirm__service'><span class='confirm__data'>Valor final:</span> R$" . $solicitation['preco'] - $userCredit . "</p>
        
                            <a href='solicitacoes.php' class='confirm__link'>Confirmar pedido</a>
                        </div>
                    "
                ?>

                </div>
            </section>
        </main>

        <?php
            echo createFooter();
        ?>
</body>
</html>