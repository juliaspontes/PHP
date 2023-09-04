<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="Resposta7.php" method="post">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<div class="mb-3">
                        <label for="nome' . $i . '">Nome do Aluno ' . $i . ':</label>
                        <input type="text" class="form-control" id="nome' . $i . '" name="nomes[]" required>
                      </div>';
                echo '<div class="mb-3">
                        <label for="nota1' . $i . '">Nota 1 do Aluno ' . $i . ':</label>
                        <input type="number" class="form-control" id="nota1' . $i . '" name="notas1[]" step="0.01" required>
                      </div>';
                echo '<div class="mb-3">
                        <label for="nota2' . $i . '">Nota 2 do Aluno ' . $i . ':</label>
                        <input type="number" class="form-control" id="nota2' . $i . '" name="notas2[]" step="0.01" required>
                      </div>';
            }
            ?>
            <button type="submit" class="btn btn-warning">Calcular</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>