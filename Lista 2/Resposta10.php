<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <h1>
      <div class=container>
        <?php

        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        $IMC = $peso / ($altura*$altura);

        if ($IMC < 18.5) {
            echo "Você está abaixo do peso!";
        } elseif ($IMC >= 18.5 && $IMC < 24.9) {
            echo "Você está no peso normal!";
        } elseif ($IMC >= 25 && $IMC < 29.9) {
            echo "Você está no Sobrepeso!";
        } elseif ($IMC >= 30 && $IMC < 34.9) {
            echo "Você está na Obesidade Grau I!";
        } elseif ($IMC >= 35 && $IMC < 39.9) {
            echo "Você está na Obesidade Grau II!";
        } else {
            echo "Você está naObesidade Grau III!";
        }

        ?>
      </div>
    </h1>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>