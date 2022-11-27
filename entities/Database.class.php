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

        public static function getUserType($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT tipo_usuario FROM Usuarios WHERE id_usuario = :id_usuario");
            $statement->bindParam(":id_usuario", $userId, PDO::PARAM_STR);
            $status = $statement->execute();
            $userType = $statement->fetch();

            return $userType[0];
        }

        public static function updateUserCredit($userId, $newValue){
            $database = Database::getConnection();
            $statement = $database->prepare("UPDATE Usuarios SET credito = :newValue WHERE id_usuario = :id_usuario");
            $status = $statement->execute([":id_usuario" => $userId, ":newValue" => $newValue]);

            return $status;
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

        public static function getAllProviderSolicitations($userId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT * FROM Solicitacoes WHERE id_usuario_prestador = :id_usuario_prestador");
            $status = $statement->execute(["id_usuario_prestador" => $userId]);
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

        public static function getServiceIdFromTs($typeServiceId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT id_servico FROM Tipo_Servicos WHERE id_tipo_servico = :id_tipo_servico");
            $status = $statement->execute([":id_tipo_servico" => $typeServiceId]);
            $query = $statement->fetch();

            return $query[0];
        }

        public static function getServiceNameFromTs($typeServiceId){
            $database = Database::getConnection();
            $result = Database::getServiceIdFromTs($typeServiceId);
            
            return Database::getServiceName($result[0]);
        }

        public static function getTypeServicePrice($typeServiceId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT preco FROM Tipo_Servicos WHERE id_tipo_servico = :id_tipo_servico");
            $status = $statement->execute([":id_tipo_servico" => $typeServiceId]);
            $query = $statement->fetch();

            return $query[0];
        }

        public static function getTypeServiceName($typeServiceId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT nome FROM Tipo_Servicos WHERE id_tipo_servico = :id_tipo_servico");
            $status = $statement->execute([":id_tipo_servico" => $typeServiceId]);
            $query = $statement->fetch();

            return $query[0];
        }

        public static function insertSolicitation($solicitation){
            $database = Database::getConnection();
            $statement = $database->prepare("INSERT INTO Solicitacoes (id_servico, id_tipo_servico, id_usuario_prestador, id_usuario_tomador, condicao, data_servico, horario, preco) VALUES (:id_servico, :id_tipo_servico, :id_usuario_prestador, :id_usuario_tomador, :condicao, :data_servico, :horario, :preco)");
            $status = $statement->execute([
                ":id_servico" => $solicitation->getIdServico(),
                ":id_tipo_servico" => $solicitation->getIdTipoServico(),
                ":id_usuario_prestador" => $solicitation->getIdUsuarioPrestador(),
                ":id_usuario_tomador" => $solicitation->getIdUsuarioTomador(),
                ":condicao" => $solicitation->getCondicao(),
                ":data_servico" => $solicitation->getDataServico(),
                ":horario" => $solicitation->getHorario(),
                ":preco" => $solicitation->getPreco()
            ]);
            return $status;
        }

        public static function getSolicitationPrice($solicitationId){
            $database = Database::getConnection();
            $statement = $database->prepare("SELECT preco FROM Solicitacoes WHERE num_pedido = :num_pedido");
            $status = $statement->execute([":num_pedido" => $solicitationId]);
            $query = $statement->fetch();
            return $query[0];
        }

        public static function updateSolicitationView($solicitationId, $newValue){
            $database = Database::getConnection();
            $statement = $database->prepare("UPDATE Solicitacoes SET visivel = :newValue WHERE num_pedido = :num_pedido");
            $status = $statement->execute([":num_pedido" => $solicitationId, ":newValue" => $newValue]);

            return $status;
        }

        public static function updateSolicitationStatus($solicitationId, $newStatus){
            $database = Database::getConnection();
            $statement = $database->prepare("UPDATE Solicitacoes SET condicao = :newStatus WHERE num_pedido = :num_pedido");
            $status = $statement->execute([":num_pedido" => $solicitationId, ":newStatus" => $newStatus]);

            return $status;
        }
    }
?>