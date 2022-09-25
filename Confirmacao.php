<?php
    $email = $_POST['email'];

    //Corpo E-mail
    $arquivo = "
        <html>
        <p><b>Obrigado por confirmar seu email!</b></p>
        </html>
    ";

    //Emails para quem será enviado o formulário
    $destino = $email;
    $assunto = "Confirmação de conta";

    //Este sempre deverá existir para garantir a exibição correta dos caracteres
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: Serviço Fácil <ServicoFacil@EsayService.com>";

    //Enviar
    mail($destino, $assunto, $arquivo, $headers);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Fácil | Confirmar</title>

    <link rel="stylesheet" href="./assets/css/basic-style.css">

    <link rel="stylesheet" href="./assets/css/error/style.css">
</head>
<body>
    <header class="header">
        <div class="header--container container-3">
            <div class="header--container--logo">
               <a href="registrar.html" class="header__link"> <img src="./assets/img/pacote.png" alt="Logo Serviço Fácil" class="header__logo"></a> 
            </div>
            <div class="header--container--content">
                <ul class="header__list">
                    <li class="header__item"><a href="registrar.html" class="header__link">Início</a></li>
                    <li class="header__item"><a href="registrar.html" class="header__link">Registrar-se</a></li>
                    <li class="header__item"><a href="logar.php" class="header__link">Entrar</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="error">
            <div class="error--container container-3">
                <img src="./assets/img/like.png" alt="Parede de tijolos" class="error__img">
                <h1 class="error__title">Obrigado por se Registrar!</h1>
                <p class="error__text">Confira sua caixa de e-mails para validar sua conta.</p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer--container container-3">
            <header class="footer__header">
                <img src="./assets/img/pacote.png" class="footer__logo" alt="Logo do Serviço Fácil">
            </header>
            <section class="footer--container--content">
                <div class="footer__about footer__about--empresa">
                    <h1 class="footer__title footer__title--company">Empresa</h1>
                    <nav class="footer__nav">
                        <a href="#" class="footer__link">Sobre</a>
                        <a href="#" class="footer__link">Empregos</a>
                    </nav>
                </div>
                <div class="footer__about footer__about--communities">
                    <h1 class="footer__title footer__title--communities">Comunidades</h1>
                    <nav class="footer__nav">
                        <a href="#" class="footer__link">Para Artistas</a>
                        <a href="#" class="footer__link">Desenvolvedores</a>
                        <a href="#" class="footer__link">Publicidade</a>
                        <a href="#" class="footer__link">Investidores</a>
                    </nav>
                </div>
                <div class="footer__about footer__about--links">
                    <h1 class="footer__title footer__title--links">Links úteis</h1>
                    <nav class="footer__nav">
                        <a href="#" class="footer__link">Suporte</a>
                        <a href="#" class="footer__link">Aplicativo móvel grátis</a>
                    </nav>
                </div>
            </section>
            <section class="footer--container--medias">
                <ul class="footer__list--socials">
                    <li class="footer__item--socials footer__item--instagram">
                        <a href="#" class="footer__link--socials footer__link--instagram">
                            <i class="footer__icon icon icon--instagram"></i>
                        </a>
                    </li>
                    <li class="footer__item--socials footer__item--twitter">
                        <a href="#" class="footer__link--socials footer__link--twitter">
                            <i class="footer__icon icon icon--twitter"></i>
                        </a>
                    </li>
                    <li class="footer__item--socials footer__item--facebook">
                        <a href="#" class="footer__link--socials footer__link--facebook">
                            <i class="footer__icon icon icon--facebook"></i>
                        </a>
                    </li>
                </ul>
            </section>
            <section class="footer--container--country">
                <p class="footer__text footer__text--country">&#127758; Brasil</p>
            </section>
            <section class="footer--container--infos">
                <ul class="footer__list--infos">
                    <li class="footer__item--infos">
                        <a href="#" class="footer__link footer__link--infos">Legal</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="#" class="footer__link footer__link--infos">Centro de Privacidade</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="#" class="footer__link footer__link--infos">Política de Privacidade</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="#" class="footer__link footer__link--infos">Cookies</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="#" class="footer__link footer__link--infos">Sobre Anúncios</a>
                    </li>
                </ul>
                <div class="footer--container--rights">
                    <p class="footer__text footer__text--rights">&copy; 2022 Serviço Fácil</p>
                </div>
            </section>
        </div>
    </footer>
</body>
</html>