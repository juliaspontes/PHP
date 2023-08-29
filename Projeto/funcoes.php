<?php

    $data = date ("d/m/Y");
    echo "<br>Dia de hoje: $data";

    $dia = 22;
    $mes = 3;
    $ano = 2003;

    if (checkdate($mes, $dia, $ano)){
        echo "<br>A data existe!";
    }

    $palavra = "Toledo Prudente";
    echo "<br>A palavra tem ".strlen($palavra)." caracteres";


    //$primeira_palavra = substr($palavra, 0, 6);
    //$segunda_palavra = substr($palavra, -8);

    $primeira_palavra = strtoupper(substr($palavra, 0, 6));
    $segunda_palavra = strtolower(substr($palavra, -8));

    echo "<br>Primeira: $primeira_palavra";
    echo "<br>Segunda: $segunda_palavra";
    echo "<br>";

    $nomes = ["Júlia", "André", "Gustavo", "Felipe", "Lucas", "Bruno", "Pedro", "João"];
    sort($nomes);
    var_dump ($nomes);


    $valor = 10569.123456;
    $valor = number_format($valor, 2, ",", ".");
    echo "<br>Valor formatado: $valor";


    echo "<br>";
    function soma($valor1, $valor2) : float 
    {
        $resultado = $valor1 + $valor2;
            //echo "Resultado: $resultado";
        return $resultado;
    }
    echo "Chamando a função soma: ".(soma(1,2));

?>

<br>
<a href="teste.php" target="_blank">Clique aqui</a>