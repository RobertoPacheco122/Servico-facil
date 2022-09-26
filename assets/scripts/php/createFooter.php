<?php
    function createFooter(){
        return "
            <footer class='footer'>
                <div class='footer--container container-3'>
                    <header class='footer__header'>
                        <a href='servicos.php' class='footer__link'>
                            <img src='./assets/img/pacote.png' class='footer__logo' alt='Logo do Serviço Fácil'>
                        </a>
                    </header>
                    <section class='footer--container--content'>
                        <div class='footer__about footer__about--empresa'>
                            <h1 class='footer__title footer__title--company'>Empresa</h1>
                            <nav class='footer__nav'>
                                <a href='error.php' class='footer__link'>Sobre</a>
                                <a href='error.php' class='footer__link'>Empregos</a>
                            </nav>
                        </div>
                        <div class='footer__about footer__about--communities'>
                            <h1 class='footer__title footer__title--communities'>Comunidades</h1>
                            <nav class='footer__nav'>
                                <a href='error.php' class='footer__link'>Para Artistas</a>
                                <a href='error.php' class='footer__link'>Desenvolvedores</a>
                                <a href='error.php' class='footer__link'>Publicidade</a>
                                <a href='error.php' class='footer__link'>Investidores</a>
                            </nav>
                        </div>
                        <div class='footer__about footer__about--links'>
                            <h1 class='footer__title footer__title--links'>Links úteis</h1>
                            <nav class='footer__nav'>
                                <a href='error.php' class='footer__link'>Suporte</a>
                                <a href='error.php' class='footer__link'>Aplicativo móvel grátis</a>
                            </nav>
                        </div>
                    </section>
                    <section class='footer--container--medias'>
                        <ul class='footer__list--socials'>
                            <li class='footer__item--socials footer__item--instagram'>
                                <a href='error.php' class='footer__link--socials footer__link--instagram'>
                                    <i class='footer__icon icon icon--instagram'></i>
                                </a>
                            </li>
                            <li class='footer__item--socials footer__item--twitter'>
                                <a href='error.php' class='footer__link--socials footer__link--twitter'>
                                    <i class='footer__icon icon icon--twitter'></i>
                                </a>
                            </li>
                            <li class='footer__item--socials footer__item--facebook'>
                                <a href='error.php' class='footer__link--socials footer__link--facebook'>
                                    <i class='footer__icon icon icon--facebook'></i>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class='footer--container--country'>
                        <p class='footer__text footer__text--country'>&#127758; Brasil</p>
                    </section>
                    <section class='footer--container--infos'>
                        <ul class='footer__list--infos'>
                            <li class='footer__item--infos'>
                                <a href='error.php' class='footer__link footer__link--infos'>Legal</a>
                            </li>
                            <li class='footer__item--infos'>
                                <a href='error.php' class='footer__link footer__link--infos'>Centro de Privacidade</a>
                            </li>
                            <li class='footer__item--infos'>
                                <a href='error.php' class='footer__link footer__link--infos'>Política de Privacidade</a>
                            </li>
                            <li class='footer__item--infos'>
                                <a href='error.php' class='footer__link footer__link--infos'>Cookies</a>
                            </li>
                            <li class='footer__item--infos'>
                                <a href='error.php' class='footer__link footer__link--infos'>Sobre Anúncios</a>
                            </li>
                        </ul>
                        <div class='footer--container--rights'>
                            <p class='footer__text footer__text--rights'>&copy; 2022 Serviço Fácil</p>
                        </div>
                    </section>
                </div>
            </footer>        
        ";
    }
?>