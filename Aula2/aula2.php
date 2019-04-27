<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula2</title>
</head>
<body>
    <?php
        require './Usuario.php';
        $usuario = new Usuario();
        $usuario->setNome("Teste");
        $usuario->setEmail("teste@teste");
        $usuario->setProva("10");
        $usuario->setTrabalho("7");

        echo $usuario->getNome();
        echo $usuario->getEmail();
        echo $usuario->getProva() +  $usuario->getTrabalho();



?>
</body>
</html>