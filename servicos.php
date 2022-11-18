<?php
    include_once("./assets/scripts/php/myLibrary.php");
    include_once("./entities/Database.class.php");

    $services = Database::getAllServices();
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
    <?php createHeader(); ?>

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
                <h1 class="services__title">Selecione um serviço</h1>
                <ul class="services__list">
                    <?php 
                        foreach($services as $service){
                            createServiceCard($service);
                        }
                    ?>
                </ul>
            </div>
        </section>
    </main>

    <?php createFooter(); ?>  
</body>
</html>