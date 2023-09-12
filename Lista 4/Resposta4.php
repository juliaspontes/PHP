<?php

function somaDivisores($numero) {

    $soma = 0;
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

for ($i = 1; $i <= 5; $i++) {
    $numero = intval(readline("Informe o número inteiro positivo $i: "));
    
    if ($numero > 0) {
        $resultado = somaDivisores($numero);
        echo "Divisores de $numero: " . implode("+", array_filter(range(1, $numero - 1), function ($val) use ($numero) {
            return $numero % $val == 0;
        })) . " = $resultado" . PHP_EOL;
    } else {
        echo "Por favor, informe um número inteiro positivo." . PHP_EOL;
        $i--;
    }
}
?>
