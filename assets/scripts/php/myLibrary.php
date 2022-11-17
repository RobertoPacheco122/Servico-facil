<?php

function checkSession(){
    session_start();

    if(isset($_SESSION["user"])) return $_SESSION["user"];
}

function createHeader(){
    $sessao = checkSession();

    if ($sessao != null) { 
        $listItem = "<li class='header__item'>Olá, $sessao</li>";
    } else {
        $listItem = "<li class='header__item'> Olá, faça o <a href='logar.php'class='header__link'>Login</a> ou <a href='registrar.php' class='header__link'>Registre-se</a></li>";
    }

    echo "
        <header class='header'>
            <div class='header--container container-3'>
                <div class='header--container--logo'>
                    <a href='servicos.php' class='footer__link'>
                        <img src='./assets/img/pacote.png' alt='Logo Serviço Fácil' class='header__logo'>
                    </a>
                </div>
                <div class='header--container--content'>
                    <ul class='header__list'>
                        <li class='header__item'><a href='error.php' class='header__link'>Início</a></li>
                        <li class='header__item'><a href='servicos.php' class='header__link'>Serviços</a></li>
                        <li class='header__item'><a href='solicitacoes.php' class='header__link'>Solicitações</a></li>
                        
                        $listItem
                    </ul>
                </div>
            </div>
        </header>
    ";
}

function createFooter(){
    echo "
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

function createSolicitationCard($solicitation){
    $providerName = Database::getUserName($solicitation['id_usuario_prestador']);
    $providerLastname = Database::getUserLastname($solicitation['id_usuario_prestador']);
    $providerEmail = Database::getUserEmail($solicitation['id_usuario_prestador']);

    echo "
    <div class='status--container--card'>
        <header class='status__header'>
            <div class='status--container--header'>
                <p class='status__number'>Pedido: " . $solicitation['num_pedido'] . "</p>
                <br>
                <p class='status__service'>Status: " . $solicitation['condicao'] . "</p> 
             </div>
            <h1 class='status__title--card'> " . $solicitation['tipo_servico'] . "</h1>
            <p class='status__text'>Serviço: " . $solicitation['servico'] . "</p>
            <p class='status__text'>Preço: R$ " . $solicitation['preco'] . "</p>
            <p class='status__text'>Data: " . $solicitation['data_servico'] . "</p>
            <p class='status__text'>Horário: " . $solicitation['horario'] . "</p>
            <p class='status__text'>Prestador: " . $providerName . " " . $providerLastname ."</p>
            <p class='status__text'>Email: " . $providerEmail . "</p>
        </header>
        <div class='status--container--content'>
            <div class='status--container--obs'>
                <p class='status__obs'>Observações: " . $solicitation['observacao'] . "</p>
            </div>
            <div class='status--container--button'>
                <a href='error.php' class='status__button'>Cancelar serviço</a>
            </div>
        </div>
    </div>
    ";
}

function getRegisterData(){
    $nome = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    $servico = $_POST["service"];

    if($servico == null) {
        $user = new Cliente($nome, $lastname, $email, $senha, 1);
    } else {
        $user = new Prestador($nome, $lastname, $email, $senha, 2, $servico);
    }

    return $user;
}

function showServices($services) {
    for ($i = 0; $i < count($services); $i++) {
        echo "<option value='$i'>".$services[$i]->getServico()."</option>";
    }
}