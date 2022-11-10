<?php

function checkSession(){
    session_start();

    if(isset($_SESSION["user"])) return $_SESSION["user"];
}