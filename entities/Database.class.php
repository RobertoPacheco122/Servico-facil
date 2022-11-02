<?php
    abstract class Database {
        public static function getConnection(){
            $database = new PDO("mysql:host=localhost;dbname=servico_facil;charset=utf8mb4","root","");
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $database;
        }

        public static function addClient($client){
            $db = Database::getConnection();
            $statement = $db->prepare("INSERT INTO Clientes (nome, sobrenome, email, senha, credito) VALUES (:nome, :sobrenome, :email, :senha, :credito)");
            $statement->bindParam(":nome", $client->getNome(), PDO::PARAM_STR);
            $statement->bindParam(":sobrenome", $client->getSobrenome(), PDO::PARAM_STR);
            $statement->bindParam(":email", $client->getEmail(), PDO::PARAM_STR);
            $statement->bindParam(":senha", $client->getSenha(), PDO::PARAM_STR);
            $statement->bindParam(":credito", $client->getCredito(), PDO::PARAM_INT);
            $status = $statement->execute();

            return $status;
        }
    }
?>