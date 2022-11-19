<?php
    include_once("./assets/scripts/php/myLibrary.php");
    include_once("./entities/Database.class.php");

    session_start();
    $typeServiceId = $_POST['tipo_servico'];
    $date = $_POST['data'];
    $hour = $_POST['horario'];

    $dateConvert = str_replace("-", "/", $date);
    $typeServiceName = Database::getTypeServiceName($typeServiceId);
    $serviceName = Database::getServiceNameFromTs($typeServiceId);
    $tsPriceConvert = floatval(Database::getTypeServicePrice($typeServiceId));
    $userCreditConvert = floatval(Database::getUserCredit($_SESSION['userId']));
    $finalPrice = $tsPriceConvert - $userCreditConvert;

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
                            <p class='confirm__service'><span class='confirm__data'>Serviço:</span> " . $serviceName . "</p>
                            <h2 class='confirm__service'><span class='confirm__data'>Tipo serviço:</span> " . $typeServiceName . " </h2>
                            <p class='confirm__service'><span class='confirm__data'>Preço:</span> R$" . $tsPriceConvert . "</p>
                            <p class='confirm__service'><span class='confirm__data'>Crédito :</span> R$" . $userCreditConvert . "</p>
                            <p class='confirm__service'><span class='confirm__data'>Valor final:</span> R$" . $finalPrice . "</p>
        
                            <form action='createSolicitation.php' method='POST' class='confirm__form'>
                                <input type='text' name='ts_id' value='$typeServiceId' id='id-ts' class='hidden'>
                                <input type='text' name='date_converted' value='$dateConvert' id='date' class='hidden'>
                                <input type='text' name='hour' value='$hour' id='hour' class='hidden'>
                                <input type='number' name='final-price' value='$finalPrice' id='final-price' class='hidden'>
                                <input type='submit' value='Confirmar solicitação' class='confirm__link'>
                            </form>
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