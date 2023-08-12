<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Projeto</title>
</head>
<body class="container">
    
    Olá, hoje é <?php echo date("d"); ?> de Agosto de <?= date("Y") ?>.

    <?php
        $hora = date("H:i");
        echo "Hora Atual: $hora";
    ?>
    
    <form method="POST" action="bemvindo.php">
        <div class="col">
          <div class="row">
            <label for="nome" class="form-label">
                Informe seu nome: 
            </label>
            <input type="form-control" id="nome" name="nome" type="text"/>
            <button class="btn btn-primary" type="submit">
                Enviar
            </button>

            <label for="numero1" class="form-label">
                Informe um número: 
            </label>
            <input type="form-control" id="num1" name="numero1" type="text"/>
            <label for="numero2" class="form-label">
                Informe outro número: 
            </label>
            <input type="form-control" id="num2" name="numero2" type="text"/>
          </div>
        </div>
    </form>


</body>
</html>