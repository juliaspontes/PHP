<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Resultados</h1>
        <?php
        if (($_POST['nomes']) && isset($_POST['notas1']) && ($_POST['notas2'])) {
            $nomes = $_POST['nomes'];
            $notas1 = $_POST['notas1'];
            $notas2 = $_POST['notas2'];
            $alunos = [];
            for ($i = 0; $i < count($nomes); $i++) {
                $media = ($notas1[$i] + $notas2[$i]) / 2;
                $alunos[] = [
                    'nome' => $nomes[$i],
                    'nota1' => $notas1[$i],
                    'nota2' => $notas2[$i],
                    'media' => $media
                ];
            }
            echo '<h2>Aprovados:</h2>';
            echo '<ul>';
            foreach ($alunos as $aluno) {
                if ($aluno['media'] >= 6) {
                    echo '<li>' . $aluno['nome'] . ' - Média: ' . number_format($aluno['media'], 2) . '</li>';
                }
            }
            echo '</ul>';
            echo '<h2>Reprovados:</h2>';
            echo '<ul>';
            foreach ($alunos as $aluno) {
                if ($aluno['media'] < 6) {
                    echo '<li>' . $aluno['nome'] . '</li>';
                }
            }
            echo '</ul>';
        } else {
            echo '<p class="alert alert-danger">Nenhum dado foi enviado.</p>';
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>