<?php
    include_once("./assets/scripts/php/myLibrary.php");
    include_once("entities/Database.class.php");

    session_start();

    $userCredit = Database::getUserCredit($_SESSION['userId']);
    $userType = Database::getUserType($_SESSION['userId']);
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
                    <span class="status__span">Seu crédito: R$<?php echo $userCredit ?></span>
                    <div class="status--container--cards">
                        <?php
                            if($userType == 1){
                                $solicitationsUser = Database::getAllSolicitations($_SESSION['userId']);
                                foreach ($solicitationsUser as $solicitation) {
                                    createSolicitationCard($solicitation);
                                }
                            } else {
                                $solicitationsProvider = Database::getAllProviderSolicitations($_SESSION['userId']);
                                foreach ($solicitationsProvider as $solicitation) {
                                    createSolicitationCard($solicitation);
                                }
                            }
                            
                        ?>
                    </div>
                </div>
            </section>
        </main>

        <?php echo createFooter(); ?>
</body>
</html>