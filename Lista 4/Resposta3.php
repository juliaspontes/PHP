<?php

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

function encontrarMenor($numero1, $numero2) {
    if ($numero1 < $numero2) {
        return $numero1;
    } else {
        return $numero2;
    }
}

$menor = encontrarMenor($numero1, $numero2);

echo "O menor número entre $numero1 e $numero2 é: $menor\n";
?>
