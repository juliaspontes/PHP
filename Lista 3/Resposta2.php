<?php
            for ($i = 1; $i <= 10; $i++) {
                $numero[$i] = $_POST["numero$i"];

                $negativos = 0;
                $positivos = 0;
                $pares = 0;
                $impares = 0;

            foreach($numero as $valor) {
                if ($valor < 0) {
                    $negativos++;
                } elseif ($valor > 0) {
                    $positivos++;
                }

                if ($valor % 2 == 0) {
                    $pares++;
                } else {
                    $impares++;
                }
            }

        }
    echo "Quantidade de números positivos: $positivos\n";
    echo "Quantidade de números negativos: $negativos\n";
    echo "Quantidade de números pares: $pares\n";
    echo "Quantidade de números ímpares: $impares\n";

?>
