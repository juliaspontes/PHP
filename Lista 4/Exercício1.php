<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Verificar Data</h1>
        <form method="POST" action="Resposta1.php">
            <div class="mb-3">
                <label for="data" class="form-label">Digite uma data (no formato YYYY-MM-DD):</label>
                <input type="text" class="form-control" id="data" name="data" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>