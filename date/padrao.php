<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padrão</title>
</head>
<body>
    <?php
    $atual = new DateTime();
    echo "<br>" . $atual->format("d/m/Y H:i:s") . "<br>";

    $especifica = new DateTime("2021-12-31 23:59:59"); // 2023-03-29T09:48-03:00
    echo "<br>" . $especifica->format("d/m/Y H:i:s") . "<br>";

    $texto = new DateTime('+1 month');
    echo "<br>" . $texto->format("d/m/Y H:i:s") . "<br>";
    ?>
</body>
</html>
