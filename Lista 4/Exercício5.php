<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Calculadora de IMC</h1>
        <form method="POST" action="Resposta5.php">
            <div class="form-group">
                <label for="altura">Altura (em metros):</label>
                <input type="text" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso (em kg):</label>
                <input type="text" class="form-control" id="peso" name="peso" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>