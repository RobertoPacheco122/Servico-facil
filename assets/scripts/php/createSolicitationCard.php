<?php

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