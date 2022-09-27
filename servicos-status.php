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
        <link rel="stylesheet" href="./assets/css/status/style.css">
    </head>
    <body>
        <?php
            echo createHeader();
        ?>

        <main class="main">
            <section class="status">
                <div class="status--container container-3">
                    <h1 class="status__title">Seus serviços</h1>
                    <h2 class="status__subtitle">Veja o status de todos os serviços por você solicitados</h2>
                    <div class="status--container--cards">
                        <div class="status--container--card">
                            <header class="status__header">
                                <div class="status--container--header">
                                    <p class="status__number">Pedido: 12342131215</p>
                                    <p class="status__service">Status: Aguardando início</p> 
                                </div>
                                <h1 class="status__title--card">Marcenaria</h1>
                                <p class="status__text">Serviço: Reparo de móveis</p>
                                <p class="status__text">Preço: R$99,99</p>
                                <p class="status__text">Data: 27/02/2023</p>
                                <p class="status__text">Horário: 15:30</p>
                            </header>
                            <div class="status--container--content">
                                <div class="status--container--obs">
                                    <p class="status__obs">Observações:</p>
                                </div>
                                <div class="status--container--button">
                                    <a href="error.php" class="status__button">Cancelar serviço</a>
                                </div>
                            </div>
                        </div>

                        <div class="status--container--card">
                            <header class="status__header">
                                <div class="status--container--header">
                                    <p class="status__number">Pedido: 21412451233</p>
                                    <p class="status__service">Status: Em execução</p> 
                                </div>
                                <h1 class="status__title--card">Eletricista</h1>
                                <p class="status__text">Serviço: Gato de energia</p>
                                <p class="status__text">Preço: R$99,99</p>
                                <p class="status__text">Data: 27/02/2023</p>
                                <p class="status__text">Horário: 15:30</p>
                            </header>
                            <div class="status--container--content">
                                <div class="status--container--obs">
                                    <p class="status__obs">Observações:</p>
                                </div>
                                <div class="status--container--button">
                                    <!-- <a href="error.php" class="status__button">Cancelar serviço</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="status--container--card">
                            <header class="status__header">
                                <div class="status--container--header">
                                    <p class="status__number">Pedido: 91283974</p>
                                    <p class="status__service">Status: Pendente</p> 
                                </div>
                                <h1 class="status__title--card">Chaveiro</h1>
                                <p class="status__text">Serviço: Arrombamento de porta</p>
                                <p class="status__text">Preço: R$99,99</p>
                                <p class="status__text">Data: 27/02/2023</p>
                                <p class="status__text">Horário: 15:30</p>
                            </header>
                            <div class="status--container--content">
                                <div class="status--container--obs">
                                    <p class="status__obs">Observações:</p>
                                </div>
                                <div class="status--container--button">
                                    <a href="error.php" class="status__button">Resolver pendências</a>
                                </div>
                            </div>
                        </div>

                        <div class="status--container--card">
                            <header class="status__header">
                                <div class="status--container--header">
                                    <p class="status__number">Pedido: 12341214125</p>
                                    <p class="status__service">Status: Concluído</p> 
                                </div>
                                <h1 class="status__title--card">Bombeiro Hidráulico</h1>
                                <p class="status__text">Serviço: Roubar água do vizinho</p>
                                <p class="status__text">Preço: R$99,99</p>
                                <p class="status__text">Data: 27/02/2023</p>
                                <p class="status__text">Horário: 15:30</p>
                            </header>
                            <div class="status--container--content">
                                <div class="status--container--obs">
                                    <p class="status__obs">Observações:</p>
                                </div>
                                <div class="status--container--button">
                                    <a href="error.php" class="status__button">Avaliar prestador</a>
                                </div>
                            </div>
                        </div>

                        <div class="status--container--card">
                            <header class="status__header">
                                <div class="status--container--header">
                                    <p class="status__number">Pedido: 12345112445</p>
                                    <p class="status__service">Status: Cancelado pelo prestador</p> 
                                </div>
                                <h1 class="status__title--card">Ar condicionado</h1>
                                <p class="status__text">Serviço: Limpeza de filtro</p>
                                <p class="status__text">Preço: R$99,99</p>
                                <p class="status__text">Data: 27/02/2023</p>
                                <p class="status__text">Horário: 15:30</p>
                            </header>
                            <div class="status--container--content">
                                <div class="status--container--obs">
                                    <p class="status__obs">Observações:</p>
                                    <p class="status__description--obs">Cliente não comprou os materiais necessários para a prestação do serviço. Por isso foi cancelado.</p>
                                </div>
                                <div class="status--container--button">
                                    <a href="error.php" class="status__button">Ver mais detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
            echo createFooter();
        ?>
</body>
</html>