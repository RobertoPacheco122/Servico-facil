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
    <header class="header">
        <div class="header--container container-2">
            <div class="header--container--logo">
                <a href="registrar.html" class="header__link"> <img src="./assets/img/pacote.png" alt="Logo Serviço Fácil" class="header__logo"></a> 
            </div>
            <div class="header--container--content">
                <ul class="header__list">
                    <li class="header__item"><a href="registrar.php" class="header__link">Início</a></li>
                    <li class="header__item"><a href="registrar.php" class="header__link">Registrar-se</a></li>
                    <li class="header__item"><a href="logar.php" class="header__link">Entrar</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="call">
            <div class="call--container">
                <div class="call--container--company">
                    <h1 class="call__name--company">Lorem Ipsum</h1>
                    <h2 class="call__title"><!-- Concentre-se apenas no trabalho importante --> Lorem ipsum dolor sit amet, consectetur adipiscing </h2>
                </div>
                <div class="call--container--description">
                    <p class="call__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis orci vitae suscipit lobortis. Etiam quis eleifend neque. Sed interdum tempor enim vitae scelerisque. Vivamus consequat est et nisi elementum varius. Cras et condimentum metus, id pretium risus. Vestibulum porttitor gravida justo et congue. Nunc nec posuere leo, eu faucibus sapien.</p>
                </div>                
            </div>
        </section>
        <section class="register">
            <div class="register--container">
                <div class="register--container--form">
                    <h1 class="register__title">Registre-se</h1>
                    <div class="register--container--user">
                        <span class="register__user">Usuário</span>
                        <span class="register__pipe">|</span>
                        <span class="register__user">Prestador de Serviço</span>
                    </div>

                    <form class="register__form" action="confirmacao.php" method="post">
                        <div class="register--container--name">
                            <label class="register__label" for="name-input">Nome</label>
                            <input required class="register__input" type="text" name="name" id="name-input">
                        </div>
                        <div class="register--container--lastname">
                            <label class="register__label" for="lastname-input">Sobrenome</label>
                            <input required class="register__input" type="text" name="lastname" id="lastname-input">
                        </div>
                        <div class="register--container--email">
                            <label class="register__label" for="email-input">Email</label>
                            <input required class="register__input" type="email" name="email" id="email-input">
                        </div>                       
                        <div class="register--container--password">
                            <label class="register__label" for="email-password">Senha</label>
                            <input required class="register__input" type="password" name="password" id="email-password">
                        </div>   
                        <div class="register--container--terms">
                            <input class="register__input--checkbox" type="checkbox" name="terms" id="terms-input">
                            <label class="register__label--checkbox" for="terms-input">Concordo com os <span class="register__terms">Termos de Serviço</span></label>
                            <input class="register__input--checkbox" type="checkbox" name="news" id="news-input">
                            <label class="register__label--checkbox" for="news-input">Gostaria de receber notificações e atualizações sobre oferta de serviços e promoções através do e-mail</label>
                        </div>
                        <input class="button__input" type="submit" value="Registrar-se" id="button-input">
                        <span class="register__span">Já possui uma conta ? <a href="logar.php" class="register__link">Entre aqui</a></span>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="./assets/js/index.js"></script>
</body>
</html>