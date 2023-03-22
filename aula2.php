<?php

    $nome = "COTIL";
    echo $nome;
    echo "<br><br>";

    var_dump($nome);
    echo "<br><br>";

    $outronome ="UNICAMP";

    echo $nome . " " . $outronome;
    echo "<br><br>";

    unset ($nome);

    if (isset($nome)){  //notisset
        echo $nome;
        echo "<br><br>";
    } else {
        echo "a variável está vazia!";
    }

    $valor = 50.15;
    echo $valor;
    echo "<br><br>";

    // say hello
    echo "<br><br>";
    echo "Hello World!";
    echo "<br><br>";

    $aprovado = true;
    echo $aprovado;
    echo "<br><br>";

    $disciplinas = array("BD", "LP", "DAW");
    echo $disciplinas[2];
    echo "<br><br>";

    DEFINE("PI", 3.14);
    DEFINE("NOME_ALUNO", "Maria");

    $resultado = PI * 2;
    echo $resultado . "<br><br>";
    echo "Nome do aluno: " . NOME_ALUNO . "<br><br>";


    // DEFINE("print", echo);
    // DEFINE("(", "\"");
    // DEFINE(")", "\";");

    // print(Hello World!)

    echo "<br><br>";
    echo $_SERVER["SERVER_ADDR"] . "<br>";
    echo $_SERVER["SERVER_NAME"] . "<br>";
    echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
    echo $_SERVER["REMOTE_ADDR"] . "<br>";
    echo $_SERVER["SCRIPT_NAME"] . "<br>";


?>

