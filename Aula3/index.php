<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Nota.php';
        $notas = new Nota();
        
        $notas->setNota("Cesar Szpak", "Matemática", 5, 2);
        echo $notas->getNota();
        
        $notasDois = clone $notas;
        $notasDois->setProva(6);
        $notasDois->setTrabalho(4);
        $notasDois->setDisciplina("História");
        echo $notasDois->getNota();
        ?>
    </body>
</html>
