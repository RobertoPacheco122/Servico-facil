<?php
    abstract class Database {
        private static function getConnection(){
            $db = new PDO("mysql:host=localhost;dbname=servico_facil;charset=utf8mb4","root","");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        }

        public static function insertUser($user){
            if($user->getTipoUsuario() == 1){
                $status = Database::addClient($user);
            } else {
                $status = Database::addProvider($user);
            }

            return $status;
        }

        private static function addClient($user){
            $db = Database::getConnection();
            $statement = $db->prepare("INSERT INTO Usuarios (nome, sobrenome, email, senha, credito, tipo_usuario) VALUES (:nome, :sobrenome, :email, :senha, :credito, :tipo_usuario)");
            $status = $statement->execute([
                ":nome" => $user->getNome(), 
                ":sobrenome" => $user->getSobrenome(), 
                ":email" => $user->getEmail(), 
                ":senha" => $user->getSenha(), 
                ":credito" => $user->getCredito(),
                ":tipo_usuario" => $user->getTipoUsuario(),
            ]); 

            return $status;
        }

        private static function addProvider($user){
            $db = Database::getConnection();

            $statement = $db->prepare("INSERT INTO Usuarios (nome, sobrenome, email, senha, tipo_servico, tipo_usuario) VALUES (:nome, :sobrenome, :email, :senha, :tipo_servico, :tipo_usuario)");
            $status = $statement->execute([
                ":nome" => $user->getNome(),
                ":sobrenome" => $user->getSobrenome(),
                ":email" => $user->getEmail(),
                ":senha" => $user->getSenha(),
                ":tipo_servico" => $user->getTipoServico(),
                ":tipo_usuario" => $user->getTipoUsuario(),
            ]);

            return $status;
        }

        public static function getUserId($email, $senha){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT id_usuario FROM Usuarios WHERE email = :email AND senha = :senha");
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->bindParam(":senha", $senha, PDO::PARAM_STR);
            $status = $statement->execute();
            $clientId = $statement->fetch();

            return $clientId[0];
        }

        public static function getUserEmail($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT email FROM Usuarios WHERE id_usuario = :id_usuario");
            $statement->bindParam(":id_usuario", $userId, PDO::PARAM_STR);
            $status = $statement->execute();
            $clientEmail = $statement->fetch();

            return $clientEmail[0];
        }

        public static function getUserPassword($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT senha FROM Usuarios WHERE id_usuario = :id_usuario");
            $statement->bindParam(":id_usuario", $userId, PDO::PARAM_STR);
            $status = $statement->execute();
            $clientPassword = $statement->fetch();

            return $clientPassword[0];
        }

        public static function getUserName($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT nome FROM Usuarios WHERE id_usuario = :id_usuario");
            $statement->bindParam(":id_usuario", $userId, PDO::PARAM_STR);
            $status = $statement->execute();
            $clientName = $statement->fetch();

            return $clientName[0];
        }

        public static function getUserLastname($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT sobrenome FROM Usuarios WHERE id_usuario = :id_usuario");
            $statement->bindParam(":id_usuario", $userId, PDO::PARAM_STR);
            $status = $statement->execute();
            $clientLastname = $statement->fetch();

            return $clientLastname[0];
        }

        public static function getUserCredit($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT credito FROM Usuarios WHERE id_usuario = :id_usuario");
            $statement->bindParam(":id_usuario", $userId, PDO::PARAM_STR);
            $status = $statement->execute();
            $userCredit = $statement->fetch();

            return $userCredit[0];
        }

        public static function authenticateUser($email, $senha){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT email, senha FROM Usuarios WHERE email = :email AND senha = :senha");
            $status = $statement->execute([":email" => $email, ":senha" => $senha]);
            $query = $statement->fetch();

            return $query;
        }

        public static function getAllSolicitations($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT * FROM Solicitacoes WHERE id_usuario_tomador = :id_usuario_tomador");
            $status = $statement->execute(["id_usuario_tomador" => $userId]);
            $query = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $query;
        }

        public static function getLastSolicitation($userId){
            $database = Database::getConnection();

            $statement = $database->prepare("SELECT * FROM Solicitacoes WHERE id_usuario_tomador = :id_usuario_tomador ORDER BY num_pedido DESC LIMIT 1;");
            $status = $statement->execute([":id_usuario_tomador" => $userId]);
            $query = $statement->fetch(PDO::FETCH_ASSOC);

            return $query;
        }

        public static function getServiceName($serviceId){
            $database = Database::getConnection();

            $statement = $database->prepare("SELECT nome FROM Servicos WHERE id_servico = :id_servico;");
            $status = $statement->execute([":id_servico" => $serviceId]);
            $query = $statement->fetch();

            return $query[0];
        }

        public static function getAllServices(){
            $database = Database::getConnection();

            $statement = $database->prepare("SELECT * FROM Servicos;");
            $status = $statement->execute();
            $query = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $query;
        }

        public static function getAllTypeOfService($serviceId){
            $database = Database::getConnection();

            $statement = $database->prepare("SELECT * FROM Tipo_Servicos WHERE id_servico = :id_servico");
            $status = $statement->execute([":id_servico" => $serviceId]);
            $query = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $query;
        }
    }
?>