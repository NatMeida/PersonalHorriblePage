<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição condicional com PHP</title>
</head>
<body>
    <?php
        $media = 7.5;

        if ($media >= 7) {
            echo '<span id="aprovado">Aprovado!</span>';
        } else if (($media > 3) && ($media < 7)) {
            echo '<span id="dependencia">Recuperação!</span>';
        } else {
            echo '<span id="reprovado">Reprovado!</span>';
        }

        echo "<br><br>";
        echo "Situação:  " . ($media >= 7 ? "Aprovado" : "Reprovado");

        // estruturas ternárias são *expressions*, pois retornam um valor.
        // switchs, whiles e ifs são *statements*, pois somente realizam uma ação.
    ?>
</body>
</html>