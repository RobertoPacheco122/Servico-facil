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
    <title>Serviço Fácil | Avaliar prestador</title>

    <link rel="stylesheet" href="assets/css/basic-style.css">
    <link rel="stylesheet" href="assets/css/rate/rate.css">
</head>
<body>
    <?php echo createHeader(); ?>

    <main class="main">
        <article class="rate">
            <div class="rate--container container-3">
                <div class="rate--container--image">
                    <img src="./assets/img/confirmar-servico1.png" alt="Prestador de serviço" class="rate__image">
                </div>
                <div class="rate--container--content">
                    <h1 class="rate__title">Avalie o prestador</h1>
                    <form action="servicos-status.php" method="POST" class="rate__form">
                        <div class="rate--container--form">
                            <p class="rate__text rate__text--main">Tipo de serviço:</p>
                            <p class="rate__text">Bombeiro Hidráulico</p>
                        </div>
                        <div class="rate--container--form">
                            <p class="rate__text rate__text--main">Serviço:</p>
                            <p class="rate__text">Vazamento em Descarga</p>
                        </div>
                        <div class="rate--container--form">
                            <p class="rate__text rate__text--main">Data:</p>
                            <p class="rate__text">02/01/2022</p>
                        </div>
                        <div class="rate--container--form">
                            <p class="rate__text rate__text--main">Data de Conclusão:</p>
                            <p class="rate__text">05/01/2022</p>
                        </div>
                        <div class="rate--container--form">
                            <p class="rate__text rate__text--main">Email:</p>
                            <p class="rate__text">Jose@hotmail.com</p>
                        </div>
                        <div class="rate--container--form">
                            <p class="rate__text rate__text--main">Nota:</p>
                            <label for="1" class="rate__label">1</label>
                            <input type="radio" name="1" id="1" class="rate__radio">
                            <label for="1" class="rate__label">2</label>
                            <input type="radio" name="2" id="2" class="rate__radio">
                            <label for="1" class="rate__label">3</label>
                            <input type="radio" name="3" id="3" class="rate__radio">
                            <label for="1" class="rate__label">4</label>
                            <input type="radio" name="4" id="4" class="rate__radio">
                            <label for="1" class="rate__label">5</label>
                            <input type="radio" name="5" id="5" class="rate__radio">
                        </div>

                        <div class="rate--container--form">
                            <button type="submit" class="rate__button">Enviar avaliação</button>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </main>

    <?php echo createFooter(); ?>
</body>
</html>