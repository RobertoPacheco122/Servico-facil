<?php 
    include "Usuario.class.php"; 
    include "Servico.class.php"; 

    $user1 = new Usuario("Thiago","Policarpo", "tpoli@gmail.com",12345678);
    $servico1 = new Servico("hidraulico","desentupimento de teto",385.59);
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
        var_dump($user1);
        var_dump($servico1);
    ?>
</body>
</html>