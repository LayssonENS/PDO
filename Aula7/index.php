<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './FuncionarioPrivado.php';
        
        $funcionario = new FuncionarioPrivado();
        $funcionario->setNome("Cesar");
        $funcionario->setSalario(5200);
        echo $funcionario->verSalario();
        ?>
    </body>
</html>
