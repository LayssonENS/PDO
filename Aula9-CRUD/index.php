<?php
include 'CadastrarUsuario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Usuario</title>
    </head>
    <body>

        <h1>Cadastrar</h1>
        <form name ="CadUsuario" action="/CadastrarUsuario.php" method = "POST">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo"><br><br>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Email"><br><br>

        <label>Usuario: </label>
        <input type="text" name="usuario" placeholder="Usuario para acessar"><br><br>

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha para entrar"><br><br>

        <input type="submit" value="Cadastrar" name="SendCadUser">


        </form>
    </body>
</html>
