<?php
// Inicializa um array para armazenar os nomes dos alunos
$alunos = array();

// Loop para ler os nomes dos alunos
for ($i = 1; $i <= 10; $i++) {
    $nome = readline("Digite o nome do aluno $i: ");
    // Adiciona o nome ao array
    $alunos[] = $nome;
}

// Ordena o array em ordem alfabética
sort($alunos);

// Apresenta os nomes dos alunos em ordem alfabética
echo "Nomes dos alunos em ordem alfabética:\n";
foreach ($alunos as $aluno) {
    echo "$aluno\n";
}
?>
