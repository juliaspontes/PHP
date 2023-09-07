<?php
    $alunos = array();
    $nome;

    for ($i = 1; $i <= 10; $i++) {
        $alunos[$i] = $_POST["nome$i"];
    }

    sort($alunos);

    echo "Nomes dos alunos em ordem alfabética:\n";
    foreach ($alunos as $aluno) {
        echo "$aluno\n";
    }
?>
