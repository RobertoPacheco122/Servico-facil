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
    <title>Serviço Fácil | Entrar</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="./assets/css/registrar/style.css">
</head>
<body>
    <?php
        echo createHeader();
    ?>    

    <main class="main">
        <section class="call">
            <div class="call--container">
                <div class="call--container--company">
                    <h1 class="call__name--company">Serviço Fácil</h1>
                    <h2 class="call__title">Concentre-se apenas no trabalho importante</h2>
                </div>
                <div class="call--container--description">
                    <p class="call__description">O Serviço Fácil chegou para facilitar a busca por prestadores de serviços no Brasil. Chega de solicitar orçamentos e aguardar uma resposta. Chega de pagar para simplesmente conseguir o contato de um prestador de serviços. Em nosso sistema você digita, encontra e já sai conversando com os prestadores de serviços.</p>
                </div>                
            </div>
        </section>
        <section class="register">
            <div class="register--container">
                <div class="register--container--form">
                    <h1 class="register__title">Entrar</h1>
                    <div class="register--container--user">
                    </div>

                    <form class="register__form" action="logar.php" method="post">
                        <div class="register--container--email">
                            <label class="register__label" for="email-input">Email</label>
                            <input required class="register__input" type="email" name="emailLogin" id="email-input">
                        </div>                       
                        <div class="register--container--password">
                            <label class="register__label" for="email-password">Senha</label>
                            <input required class="register__input" type="password" name="passwordLogin" id="email-password">
                        </div>   
                        <input class="button__input" type="submit" value="Entrar" id="button-input">
                        <span class="register__span">Ainda não possui uma conta? <a href="registrar.html" class="register__link">Registre-se aqui</a></span>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="./assets/js/index.js"></script>
</body>
</html>