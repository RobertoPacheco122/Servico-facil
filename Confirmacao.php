<?php
    include "./assets/scripts/php/createHeader.php";
    include "./assets/scripts/php/createFooter.php";

    $email = $_POST['email'];

    //Corpo E-mail
    $arquivo = "
        <html>
        <p><b>Obrigado por confirmar seu email!</b></p>
        </html>
    ";

    //Emails para quem será enviado o formulário
    $destino = $email;
    $assunto = "Confirmação de conta";

    //Este sempre deverá existir para garantir a exibição correta dos caracteres
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: Serviço Fácil <ServicoFacil@EsayService.com>";

    //Enviar
    mail($destino, $assunto, $arquivo, $headers);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Fácil | Confirmar</title>

    <link rel="stylesheet" href="./assets/css/basic-style.css">

    <link rel="stylesheet" href="./assets/css/error/style.css">
</head>
<body>
    <?php
        echo createHeader();
    ?> 

    <main class="main">
        <section class="error">
            <div class="error--container container-3">
                <img src="./assets/img/like.png" alt="Parede de tijolos" class="error__img">
                <h1 class="error__title">Obrigado por se Registrar!</h1>
                <p class="error__text">Confira a caixa de e-mail para validar sua conta.</p>
                <a href="./logar.php" class="error__link">Fazer login</a>
            </div>
        </section>
    </main>

    <?php
        echo createFooter();
    ?> 
</body>
</html>