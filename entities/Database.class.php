<?php
    abstract class Database {
        public static function getConnection(){
            $database = new PDO("mysql:host=localhost;dbname=servico_facil;charset=utf8mb4","root","");
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $database;
        }
    }
?>