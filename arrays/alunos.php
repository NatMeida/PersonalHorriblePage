<?php
$isget = isset($_GET["turma"]);
$selected = $isget ? strtoupper(trim($_GET["turma"])) : "1DSD";

$alunos = array(
    "1DSD" => array(
        "1234" => "Natália",
        "5678"  => "Meida",
        "1357" => "Luanna",
        "2468" => "Larissa",
        "3690" => "Márcia",
    ),

    "2DSD" => array(
        "1234" => "João",
        "5678"  => "Meida",
        "1357" => "Lucy",
        "2468" => "Carlos",
        "3690" => "Ana",
    ),

    "3DSD" => array(
        "1234" => "Natália",
        "5678"  => "Meida",
        "1357" => "Luanna",
        "2468" => "Larissa",
        "3690" => "Márcia",
    ),

    "3QPD" => array(
        "1234" => "Natália",
        "5678"  => "Meida",
        "1357" => "Luanna",
        "2468" => "Larissa",
        "3690" => "Márcia",
    ),
);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
    <h1>Alunos</h1>

    <form method="GET">
        <select name="turma" require>
            <?php
            foreach ($alunos as $turma => $aluno) {
                $isselected = $turma == $selected ? " selected" : "";
                    echo "<option value='$turma'$isselected>$turma</option>";
            }
            ?>
        </select>

        <!-- <input type="text" name="turma" placeholder="Digite a turma"> -->
        <input type="submit" value="Buscar">
    </form>

    <?php

    if ($isget) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Matrícula</th>";
        echo "<th>Nome</th>";
        echo "</tr>";

        foreach ($alunos[$selected] as $matricula => $nome) {
            echo "<tr>";
            echo "<td>" . $matricula . "</td>";
            echo "<td>" . $nome . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
