<?php
    $nome = $_POST["nome"];
    $valor1 = $_POST["numero1"];
    $valor2 = $_POST["numero2"];

    $soma = $valor1 + $valor2;
    echo "Seja bem-vindo $nome";
    echo "<br>Valor de soma $soma";