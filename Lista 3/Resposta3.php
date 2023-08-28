<?php
        
        for($i=1; $i<=10; $i++){
            $vetor[$i] = $_POST["v$i"];
        }
        $valor_mult = $_POST['valor_mult'];
        foreach ($vetor as $valor) {
            echo "<br> O valor $valor multiplicado por $valor_mult é: ".($valor*$valor_mult);
        }
?>