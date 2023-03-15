<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calcMedia($n1, $n2) {
            $media = ($n1 + $n2) / 2;
            return $media;
        }

        if (isset($_REQUEST["nota1"]) && isset($_REQUEST["nota2"])) {
            $n1 = (int) $_REQUEST["nota1"];
            $n2 = (int) $_REQUEST["nota2"];

            $media = calcMedia($n1, $n2);
            echo "A média é: " . $media;
            echo "<br>";
            echo "Situação: " . ($media >= 7 ? "Aprovado" : "Reprovado");
            // estruturas ternárias são *expressions*, pois retornam um valor. switchs, whiles e ifs são *statements*, pois somente realizam uma ação.
        } else {
            echo "Erro: parâmetros inválidos.";
        }

        // falar miau 28 vezes
        $i = 0;
        while ($i < 28) {
            echo "miau ";
            $i++;
        }
    ?>

</body>

<style>
    #aprovado {
        color: green;
    }

    #reprovado {
        color: red;
    }
</style>

</html>
