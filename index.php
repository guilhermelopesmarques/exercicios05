<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios05</title>
</head>
<body>
    <form method="POST">
    <input type="number" name="graus">
    <button type="submit" name="verificar">Verificar</button>
    </form>
    <?php
    $graus = $_POST["graus"];
    $fahrenheit = ($graus * 9/5 + 32);

    echo $fahrenheit ;
    ?>
</body>
</html>