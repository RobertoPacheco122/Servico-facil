<?php

include_once("./entities/Database.class.php");
include_once("./entities/Solicitacao.class.php");

session_start();

$typeServiceId = $_POST["ts_id"];
$date = $_POST["date_converted"];
$hour = $_POST["hour"];
$finalPrice = $_POST["final-price"];

$solicitation = new Solicitacao(
    Database::getServiceIdFromTs($typeServiceId), $typeServiceId, 3, $_SESSION["userId"], "Aguardando início", $date, $hour, $finalPrice);

$insertStatus = Database::insertSolicitation($solicitation);

if($insertStatus == 1){
    Database::updateUserCredit($_SESSION["userId"], 0);
    header("location: solicitacao-confirmar.php");
} else {
    header("location: error.php");
}