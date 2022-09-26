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
    <header class="header">
        <div class="header--container container-3">
            <div class="header--container--logo">
                <img src="./assets/img/pacote.png" alt="Logo Serviço Fácil" class="header__logo">
            </div>
            <div class="header--container--content">
                <ul class="header__list">
                    <li class="header__item"><a href="error.php" class="header__link">Início</a></li>
                    <li class="header__item"><a href="registrar.php" class="header__link">Registrar-se</a></li>
                    <li class="header__item"><a href="logar.php" class="header__link">Entrar</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="call">
            <div class="call--container container-3">
                <div class="call--container--content">
                    <h1 class="call__title">Lorem ipsum dolor sit amet, adipiscing elit.</h1>
                    <p class="call__subtitle">Lorem ipsum dolor sit amet, consectetur</p>
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
                <h1 class="services__title">Selecione um tipo de serviço</h1>
                <ul class="services__list">
                    <li class="services__item">
                        <a href="marcenaria.php" class="services__link">
                            <i class="services__icon icon icon--lime"></i>
                            <p class="services__text">Marcenaria</p>
                        </a>
                    </li>

                    <li class="services__item">
                        <a href="chaveiro.php" class="services__link">
                            <i class="services__icon icon icon--keychain"></i>
                            <p class="services__text">Chaveiro</p>
                        </a>
                    </li>
                        
                    <li class="services__item">
                        <a href="hidraulico.php" class="services__link">
                            <i class="services__icon icon icon--pipe"></i>
                            <p class="services__text">Bombeiro Hidráulico</p>
                        </a>
                    </li>

                    <li class="services__item">
                        <a href="eletricista.php" class="services__link">
                            <i class="services__icon icon icon--circuit"></i>
                            <p class="services__text">Eletricista</p>
                        </a>
                    </li>

                    <li class="services__item">
                        <a href="arcondicionado.php" class="services__link">
                            <i class="services__icon icon icon--airconditioning"></i>
                            <p class="services__text">Ar Condicionado</p>
                        </a>
                    </li>    
                </ul>
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
                        <a href="error.php" class="footer__link">Sobre</a>
                        <a href="error.php" class="footer__link">Empregos</a>
                    </nav>
                </div>
                <div class="footer__about footer__about--communities">
                    <h1 class="footer__title footer__title--communities">Comunidades</h1>
                    <nav class="footer__nav">
                        <a href="error.php" class="footer__link">Para Artistas</a>
                        <a href="error.php" class="footer__link">Desenvolvedores</a>
                        <a href="error.php" class="footer__link">Publicidade</a>
                        <a href="error.php" class="footer__link">Investidores</a>
                    </nav>
                </div>
                <div class="footer__about footer__about--links">
                    <h1 class="footer__title footer__title--links">Links úteis</h1>
                    <nav class="footer__nav">
                        <a href="error.php" class="footer__link">Suporte</a>
                        <a href="error.php" class="footer__link">Aplicativo móvel grátis</a>
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
                        <a href="error.php" class="footer__link footer__link--infos">Legal</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.php" class="footer__link footer__link--infos">Centro de Privacidade</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.php" class="footer__link footer__link--infos">Política de Privacidade</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.php" class="footer__link footer__link--infos">Cookies</a>
                    </li>
                    <li class="footer__item--infos">
                        <a href="error.php" class="footer__link footer__link--infos">Sobre Anúncios</a>
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