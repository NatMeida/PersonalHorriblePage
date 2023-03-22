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
        place-items: center;
        font-family: Arial, Helvetica, sans-serif;
        background-color: rosebrown;
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
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
</body>
</html>


