<?php
    class Servico {
        public $tipo_servico;
        public $servico;
        public $preco;

        public function __construct($tipo_servico, $servico, $preco){
            $this->tipo_servico = $tipo_servico;
            $this->servico = $servico;
            $this->preco = $preco;
        }
    }

    $servico1 = new Servico("Bombeiro Hidráulico", "Desentupimento de Teto", 239.99);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($servico1);
    ?>
</body>
</html>