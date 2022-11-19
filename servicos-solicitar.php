<?php
    include_once("./assets/scripts/php/myLibrary.php");
    include_once("./entities/Database.class.php");

    $serviceName = Database::getServiceName($_POST['id']);
    $typeOfServices = Database::getAllTypeOfService($_POST['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Fácil / Solicitar Serviço</title>

    <link rel="stylesheet" href="./assets/css/basic-style.css">
    <link rel="stylesheet" href="assets/css/servicesphp/style.css">
</head>
<body>
    <?php createHeader(); ?>

    <section class="call">
        <div class="call--container container-3">
            <?php
                createServiceCall($serviceName);
            ?>
        </div>
    </section>
    <section class="services">
        <div class="services--container container-3">
            <h1 class="services__title">Serviços de Hidráulica</h1>
            <form action="servicos-confirmar.php" method="post" class="services__form">
                <select title="servicos" name="tipo_servico" id="servicos" class="services__select">
                    <option value="0">Selecione um tipo de serviço</option>
                    <?php
                        foreach($typeOfServices as $typeOfService){
                            createTypeOfServiceOptions($typeOfService); 
                        }
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

    <?php createFooter(); ?>
</body>
</html>