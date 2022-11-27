<?php

include_once("./entities/Database.class.php");

$solicitationId = $_POST['id-solicitation'];
$operation = $_POST['operation'];

function checkOperation($operation, $solicitationId){
    if($operation == "Resolver pendências"){
        Database::updateSolicitationStatus($solicitationId, "Aguardando início");
    } elseif ($operation == "Cancelar"){
        Database::updateSolicitationStatus($solicitationId, "Cancelado");
    } elseif ($operation == "Avaliar prestador"){
        header("location: avaliar.php");
        return;
    } elseif ($operation == "Iniciar serviço"){
        Database::updateSolicitationStatus($solicitationId, "Execução");
    } elseif ($operation == "Concluir serviço"){
        Database::updateSolicitationStatus($solicitationId, "Concluído");
    } elseif ($operation == "Continuar"){
        Database::updateSolicitationStatus($solicitationId, "Execução");
    } else {
        header("location: error.php");
        return;
    }

    header("location: solicitacoes.php");
}



checkOperation($operation, $solicitationId);