<?php
    include_once("./assets/scripts/php/myLibrary.php");
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
                    <h1 class="register__title">Registre-se</h1>
                    <div class="register--container--user">
                        <span class="register__user" id="client--button">Sou Cliente</span>
                        <span class="register__pipe">|</span>
                        <span class="register__user" id="provider--button">Sou Prestador de Serviços</span>
                    </div>

                    <form class="register__form" id="register__form--client" action="Confirmacao.php" method="post">
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

                    <form class="register__form hidden" id="register__form--provider" action="Confirmacao.php" method="post">
                        <div class="register--container--name">
                            <label class="register__label" for="name-input">Nome</label>
                            <input required class="register__input" type="text" name="name" id="name-input-provider">
                        </div>
                        <div class="register--container--lastname">
                            <label class="register__label" for="lastname-input">Sobrenome</label>
                            <input required class="register__input" type="text" name="lastname" id="lastname-input-provider">
                        </div>
                        <div class="register--container--email">
                            <label class="register__label" for="email-input">Email</label>
                            <input required class="register__input" type="email" name="email" id="email-input-provider">
                        </div>                       
                        <div class="register--container--password">
                            <label class="register__label" for="email-password">Senha</label>
                            <input required class="register__input" type="password" name="password" id="email-password-provider">
                        </div>
                        <div class="register--container--service">
                            <label for="service" class="register__label">Escolha o seu tipo de serviço</label>
                            <select title="Serviço" name="service" id="service" class="register__select">
                                <option value="0" class="register__option">Selecione uma opção</option>
                                <option value="Bombeiro Hidráulico" class="register__option">Bombeiro Hidráulico</option>
                                <option value="Marido de aluguel" class="register__option">Marido de aluguel</option>
                                <option value="Assasino de alguel" class="register__option">Assasino de alguel</option>
                            </select>
                        </div> 
                        <div class="register--container--terms">
                            <input class="register__input--checkbox" type="checkbox" name="terms" id="terms-input-provider">
                            <label class="register__label--checkbox" for="terms-input">Concordo com os <span class="register__terms">Termos de Serviço</span></label>
                        </div>
                        <input class="button__input" type="submit" value="Registrar-se" id="button-input-provider">
                        <span class="register__span">Já possui uma conta ? <a href="logar.php" class="register__link">Entre aqui</a></span>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="./assets/scripts/js/index.js"></script>
</body>
</html>