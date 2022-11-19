<?php
    include_once("./assets/scripts/php/myLibrary.php");
    include_once("./entities/Database.class.php");

    session_start();

    $solicitation = Database::getLastSolicitation($_SESSION['userId']);
    $providerId = $solicitation["id_usuario_prestador"];
    $solicitationId = $solicitation["num_pedido"];
    $providerName = Database::getUserName($providerId);
    $providerEmail = Database::getUserEmail($providerId);
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
        <?php createHeader(); ?>

        <main class="main">
            <section class="confirm">
                <div class="confirm--container container-3">
                    <div class="confirm--container--image">
                        <img src="./assets/img/confirmar-servico1.png" alt="" class="confirm__img">
                        <h1 class="confirm__title">Solicitação confirmada!</h1>
                        <p class="confirm__text">O seu pedido foi realizado com sucesso.</p>
                    </div>
                    <div class="confirm--container--content">
                        <?php
                            echo "
                                <h2 class='confirm__service'><span class='confirm__data'>Número do pedido:</span>$solicitationId</h2>
                                <p class='confirm__service'><span class='confirm__data'>Nome do prestador: </span>$providerName</p>
                                <p class='confirm__service'><span class='confirm__data'>E-mail: </span>$providerEmail</p>
                            ";
                        ?>
                        
                        <a href="solicitacoes.php" class="confirm__link">Visualizar suas solicitações</a>
                    </div>
                </div>
            </section>
        </main>

        <?php createFooter(); ?>
    </body>
</html>