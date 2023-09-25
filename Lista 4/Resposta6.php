<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Resultado</h1>
        <?php
        function isPerfect($number) {
            $sum = 0;
            for ($i = 1; $i < $number; $i++) {
                if ($number % $i == 0) {
                    $sum += $i;
                }
            }
            return $sum == $number;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST["numero"]);

            if (isPerfect($numero)) {
                echo '<p>O número ' . $numero . ' é perfeito.</p>';
            } else {
                echo '<p>O número ' . $numero . ' não é perfeito.</p>';
            }
        }
        ?>
        <a href="exe6.php" class="btn btn-primary">Voltar</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>