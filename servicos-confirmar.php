<?php
    include "entities/Servicos.class.php";
    include "entities/Servico.class.php";
    include "assets/scripts/php/createHeader.php";
    include "assets/scripts/php/createFooter.php";

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
                        <h1 class="confirm__title">Falta pouco!</h1>
                        <p class="confirm__text">Revise os dados antes de confirmar a solicitação.</p>
                    </div>
                    <div class="confirm--container--content">
                        <h2 class="confirm__service"><span class="confirm__data">Tipo de serviço:</span> Eletricista</h2>
                        <p class="confirm__service"><span class="confirm__data">Serviço:</span> Fazer gato de energia</p>
                        <p class="confirm__service"><span class="confirm__data">Preço do serviço:</span> R$85.59</p>
                        <p class="confirm__service"><span class="confirm__data">Crédito :</span> R$10.00</p>
                        <p class="confirm__service"><span class="confirm__data">Valor total:</span> R$75.59</p>

                        <a href="confirmar-pedido.php" class="confirm__link">Confirmar pedido</a>
                    </div>
                </div>
            </section>
        </main>

        <?php
            echo createFooter();
        ?>
</body>
</html>