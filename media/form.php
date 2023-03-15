<?php
    $msgN1 = "";
    $msgN2 = "";
    $media = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $msgN1 = "";
        $msgN2 = "";

        if (isset($_POST["nota1"]) && isset($_POST["nota2"])) {
            $n1 = (int) $_POST["nota1"];
            $n2 = (int) $_POST["nota2"];

            if ($n1 < 6 || $n1 > 12) {
                $msgN1 = "Nota inválida.";
            }

            if ($n2 < 6 || $n2 > 12) {
                $msgN2 = "Nota inválida.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="n1">Nota 1</label>
        <input type="number" name="nota1" min="6" max="12" require>
        <span class="warning"><small><?= $msgN1 ?></small></span>

        <br>

        <label for="n2">Nota 2</label>
        <input type="number" name="nota2" min="6" max="12" require>
        <span class="warning"><small><?= $msgN2 ?></small></span>

        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($media) && $media != '') {
        echo "<br><hr><br>";

        $aprovado = $media >= 7;
        echo "A média é: <span id='" . ($aprovado ? "aprovado" : "reprovado") . "'>" .  $media . "</span>";
    }
    ?>
</body>

</html>
