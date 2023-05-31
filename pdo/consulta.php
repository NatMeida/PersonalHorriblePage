<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <a href="index.html">Home</a>
  <hr>
  <h2>Consulta de Alunos</h2>
    <form method="post">
        RA:<br>
        <input type="text" size="10" name="ra">
        <input type="submit" value="consultar">
        <hr>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] ==='POST'){
        include("database.php");

        if (isset($_POST["ra"]) && ($_POST["ra"] != "")){
            $ra = $_POST["ra"];
            $stmt = $pdo->prepare("select * from alunos where ra= :ra order by curso, nome");
            $stmt ->blindParam(':ra', $ra);
        } else {
            $stmt = $pdo -> prepare("select * from alunos order by curso, nome");
        }

        try{
            $stmt->execute();

            echo "<from method='post'>";
            echo "<table border='1px'>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>RA</th>";
            echo "<th>Nome</th>";
            echo "<th>Curso</th>";
            echo "</th>";

            while ($row = $stmt->fetch()){
                echo "<tr>";
                echo "<td><input type='radio' name='raAluno'
                    value='" . $row['ra'] . "'>";
                echo "<td>" . $row['ra'] . "</td>";
            }
        }
        catch (PDOException $e) {

        }
    }
