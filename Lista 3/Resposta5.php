<?php 

    function verificarPrimo ($valor, $vetor){
        $contador = 0;
        for($i=1; $i<=sizeof($vetor);$i++){
            if ($valor % $vetor [$i]==0){
                $contador++;
            }
        }
        if($contador == 1 || $contador == 2){
            return "Número primo!";
        } else{
            return "Não é número primo!";
        }
    }


    for ($i=1; $i<=5 ;$i++) { 
        $vetor [$i] = $_POST ["valor$i"];
    }

    for ($i=1; $i<=5; $i++){
        $vetor[$i] = $_POST["valor$i"];
    }

    for ($i=1; $i<=sizeof($vetor);$i++){
        echo "O valor ".$vetor[$i]. " é " .verificarPrimo($vetor[$i], $vetor)."<br/>";
    }