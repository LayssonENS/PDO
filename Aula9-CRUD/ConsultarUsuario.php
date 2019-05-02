<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
require './Conn.php';

$conn = new Conn;
$result_user = "SELECT * FROM usuarios";

$resultado_user = $conn->getConn()->prepare($result_user);
$resultado_user->execute();

while ($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)):
    echo "ID: " . $row_user['id'] . '<br>';
    echo "Nome: " . $row_user['nome'] . '<br>';
    echo "Email: " . $row_user['email'] . '<br>';
    echo "Usuario: " . $row_user['usuario'] . '<br>';
    echo "Inserido: " . date('d/m/Y H:i:s', strtotime($row_user['created'])) . '<br>';
    if (!empty($row_user['modified'])):
        echo "Alterado: " . date('d/m/Y H:i:s', strtotime($row_user['modified'])) . "<br>";
    endif;
    echo "<hr>";

endwhile;
?>
</body>
</html>





