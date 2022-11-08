<?php
    abstract class Database {
        private static function getConnection(){
            $database = new PDO("mysql:host=localhost;dbname=servico_facil;charset=utf8mb4","root","");
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $database;
        }

        public static function addClient($user){
            $db = Database::getConnection();
            $statement = $db->prepare("INSERT INTO Clientes (nome, sobrenome, email, senha, credito) VALUES (:nome, :sobrenome, :email, :senha, :credito)");
            $status = $statement->execute([":nome", $user->getNome(), ":sobrenome", $user->getSobrenome(), ":email", $user->getEmail(), ":senha", $user->getSenha(), ":credito", $user->getCredito()]);

            return $status;
        }

        public static function getUserId($email, $senha){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT id_cliente FROM Clientes WHERE email = :email AND senha = :senha");
            $status = $statement->execute([":email" => $email, ":senha" => $senha]);
            $clientId = $statement->fetch();

            return $clientId[0];
        }

        public static function getUserEmail($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT email FROM Clientes WHERE id_cliente = :id_cliente");
            $status = $statement->execute([":id_cliente" => $userId]);
            $clientEmail = $statement->fetch();

            return $clientEmail[0];
        }

        public static function getUserPassword($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT senha FROM Clientes WHERE id_cliente = :id_cliente");
            $status = $statement->execute([":id_cliente" => $userId]);
            $clientPassword = $statement->fetch();

            return $clientPassword[0];
        }

        public static function getUserName($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT nome FROM Clientes WHERE id_cliente = :id_cliente");
            $status = $statement->execute([":id_cliente" => $userId]);
            $clientName = $statement->fetch();

            return $clientName[0];
        }

        public static function getUserLastname($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT sobrenome FROM Clientes WHERE id_cliente = :id_cliente");
            $status = $statement->execute([":id_cliente" => $userId]);
            $clientLastname = $statement->fetch();

            return $clientLastname[0];
        }

        //public static function authenticateEmail($email){}
        //public static function authenticatePassword($password){}
        //public static function authenticateUser($email, $senha){}
    }
?>