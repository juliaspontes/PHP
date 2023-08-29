<?php
$meses = array(
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if (array_key_exists($numero, $meses)) {
        $nomeMes = $meses[$numero];
        echo "<p>O mês correspondente ao número $numero é: $nomeMes</p>";
    } else {
        echo "<p>Número de mês inválido. Digite um número de 1 a 12.</p>";
    }
}
?>