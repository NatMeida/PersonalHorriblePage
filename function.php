<?php

function calcMedia($n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    return $media;
}

$media = calcMedia(10, 10, 10, 10);

echo "A média é: " . $media;

if ($media >= 7)
    echo "<br>Aprovado";
else
    echo "<br>Reprovado";

//calcMedia

$n1 = $_GET;
$n2 = $_GET;

?>


