<?php
function calcularIMC($altura, $peso) {
    return $peso / ($altura * $altura);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = floatval($_POST["altura"]);
    $peso = floatval($_POST["peso"]);

    $imc = calcularIMC($altura, $peso);

    echo '<div class="container mt-4 alert alert-primary">';
    echo '<h2>Resultado do IMC</h2>';
    echo '<p>Seu IMC é: ' . number_format($imc, 2) . '</p>';
    echo '<p>Classificação: ';

    if ($imc < 18.5) {
        echo 'Abaixo do peso';
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo 'Peso ideal';
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo 'Levemente acima do peso';
    } elseif ($imc >= 30 && $imc <= 34.9) {
        echo 'Obesidade grau I';
    } elseif ($imc >= 35 && $imc <= 39.9) {
        echo 'Obesidade grau II (obesidade severa)';
    } else {
        echo 'Obesidade grau III (Mórbida)';
    }

    echo '</p>';
    echo '</div>';
}
?>