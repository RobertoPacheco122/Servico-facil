<?php
   include "entities/Servico.class.php";

   $servico0 = new Servico("default","Selecione um tipo de serviço",0);
   $servico1 = new Servico("Hidruáulico","Desentupimento de Teto",99.99);
   $servico2 = new Servico("Hidruáulico","Desentupimento de Escada",85.59);
   $servico3 = new Servico("Hidruáulico","Desentupimento de Vaso",55.70);
   $servico4 = new Servico("Hidruáulico","Desentupimento de Torneira",45.10);
   $servicosHidraulicos = array($servico0,$servico1,$servico2,$servico3,$servico4);

   function exibirServicos($servicos) {
    for ($i=0;$i<count($servicos);$i++) {
        echo "<option value='$i'>".$servicos[$i]->getServico()."</option>";
       }
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Fácil | Serviços</title>
</head>
<body>
    <main>
        <form action="servicos-confirmar.php" method="post">
            <select name="servicos" id="servicos">
               <?php
                exibirServicos($servicosHidraulicos);
               ?>
            </select>
            <input type="submit" value="Confirmar Serviço">
        </form>
    </main>
</body>
</html>