<?php
    include "assets/scripts/php/createHeader.php";
    include "assets/scripts/php/createFooter.php";
    include_once("assets/scripts/php/createSolicitationCard.php");
    include_once("entities/Database.class.php");

    session_start();

    $solicitations = Database::getAllSolicitations($_SESSION['userId']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Serviço Fácil | Solicitações</title>

        <link rel="stylesheet" href="./assets/css/basic-style.css">
        <link rel="stylesheet" href="./assets/css/status/style.css">
    </head>
    <body>
        <?php echo createHeader(); ?>

        <main class="main">
            <section class="status">
                <div class="status--container container-3">
                    <h1 class="status__title">Suas solicitações</h1>
                    <h2 class="status__subtitle">Veja o status de todos as solicitações feitas por você.</h2>
                    <div class="status--container--cards">
                        <?php 
                            foreach ($solicitations as $solicitation) {
                                createSolicitationCard($solicitation);
                            }
                        ?>
                    </div>
                </div>
            </section>
        </main>

        <?php echo createFooter(); ?>
</body>
</html>