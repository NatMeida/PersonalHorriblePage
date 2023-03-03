<?php

$n = 1;
$tabuada = 7;

while ($n <= 10) {
    echo $n . " * " . $tabuada . " = " . ($n * $tabuada) . "<br>";
    $n++;
}

echo "<br><br>";
$n = 1;

do {
    echo $n . " * " . $tabuada . " = " . ($n * $tabuada) . "<br>";
} while ($n++ < 10);

// continue: pula para a próxima iteração do loop
// break: sai do loop


?>
