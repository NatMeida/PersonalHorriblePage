<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<style>
    body {
        display: grid;
        font-family: Arial, Helvetica, sans-serif;
        background-color: rosebrown;
        padding-inline: 4rem;
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    h2, table, ul, ol {
        place-self: center;
    }

    th, td {
        padding: 5px;
    }
</style>

<body>
    <h1>Arrays</h1>

    <hr>

    <?php
        $array = array("Nat", "Na", "Natália");

        $map = array(
            "name" => "Natália",
            "age"  => 20,
            "city" => "São Paulo"
        );
    ?>

    <h2>Apelidos:</h2>

    <ul>
        <?php
            foreach ($array as $value) {
                echo "<li>" . $value . "</li>\n";
            }
        ?>
    </ul>

    <hr>

    <h2>Informações:</h2>

    <table>
        <tr>
            <th>Chave</th>
            <th>Valor</th>
        </tr>

        <?php
            foreach ($map as $key => $value) {
                echo "<tr>";
                echo "<td>" . $key . "</td>";
                echo "<td>" . $value . "</td>";
                echo "</tr>";
            }
        ?>
    </table>



    <hr>

    <h2>Shuffle</h2>

    <?php

    $meses = array(
        "Janeiro", "Fevereiro", "Março",
        "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro",
        "Outubro", "Novembro", "Dezembro"
    );

    print_r($meses);

    shuffle($meses);

    echo "<br> Após o shuffle: <br>";
    print_r($meses);
    ?>

    <hr>

    <h2>Sort</h2>

    <?php
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    shuffle($numeros);
    print_r($numeros);

    sort($numeros);

    echo "<br> Após o sort: <br>";
    print_r($numeros);

    rsort($numeros);

    echo "<br> Após o rsort: <br>";
    print_r($numeros);
    ?>

    <hr>

    <h2>Parse</h2>

    <?php
    $str = "curso1=Introdução ao PHP&curso2=Programação Orientada a Objetos&curso3=Introdução ao HTML5&curso4=Introdução ao CSS3";

    parse_str($str, $output);

    print_r($output);
    ?>

    <hr>

    <h2>Explode</h2>

    <?php

    $str = "maça, banana, laranja, uva, pera, abacaxi";

    $frutas = explode(", ", $str);

    print_r($frutas);
    ?>

    <hr>

    <h2>Implode</h2>

    <?php

    $frutinhas = array("morango", "manga", "abacate", "abacaxi");

    $str = implode(", ", $frutinhas);

    echo $str;

    ?>

</body>
</html>


