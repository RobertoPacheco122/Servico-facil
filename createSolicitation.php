<?php

include_once("./entities/Database.class.php");
include_once("./entities/Solicitacao.class.php");

session_start();

$typeServiceId = $_POST["ts_id"];
$date = $_POST["date_converted"];
$hour = $_POST["hour"];
$finalPrice = $_POST["final-price"];

$solicitation = new Solicitacao(
    Database::getServiceIdFromTs($typeServiceId), $typeServiceId, 3, $_SESSION["userId"], "Pendente", $date, $hour 
);

$queryStatus = Database::insertSolicitation($solicitation);

if($queryStatus == 1){
    header("location: solicitacao-confirmar.php");
} else {
    header("location: error.php");
}