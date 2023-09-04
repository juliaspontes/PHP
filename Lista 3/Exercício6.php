<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="Resposta6.php" method="post">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo '<div class="mb-3">
                        <label for="produto' . $i . '">Nome do Produto ' . $i . ':</label>
                        <input type="text" class="form-control" id="produto' . $i . '" name="produtos[]" required>
                      </div>';
                echo '<div class="mb-3">
                        <label for="preco' . $i . '">Preço do Produto ' . $i . ':</label>
                        <input type="number" class="form-control" id="preco' . $i . '" name="precos[]" step="0.01" required>
                      </div>';
            }
            ?>
            <button type="submit" class="btn btn-warning">Calcular</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
