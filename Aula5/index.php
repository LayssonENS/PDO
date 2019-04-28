<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheque</title>
</head>
<body>
<?php
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';


        $chequecomum = new ChequeComum(10.01, "Comum");
        echo $chequecomum->CalcularJuros();
        echo $chequecomum->verValor();

        $chequeespecial = new ChequeEspecial(10.01, "Comum");
        echo $chequeespecial->CalcularJuros();
        echo $chequeespecial->verValor()
?>
</body>
</html>