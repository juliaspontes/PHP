<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (isset($_POST['data'])) {
        $data = $_POST['data'];

        if (validateDate($data, 'Y-m-d')) {
            $dataObj = new DateTime($data);
            $diaDaSemana = $dataObj->format('l');

            echo "<p>A data '$data' é válida e corresponde a um(a) $diaDaSemana.</p>";
        } else {
            echo "<p>A data '$data' não é válida.</p>";
        }
    }

    // Função para validar uma data
    function validateDate($date, $format = 'Y-m-d') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
    ?>
</body>
</html>