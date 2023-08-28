<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body class="container">
    <br>

    <form action="Resposta3.php" method="POST">
    <div class="row">
        <?php for($i=1; $i<=10; $i++){ ?>
            <div class="col">
                <label for="v<?=$i?>" class="form-label">Informe o valor <?=$i?>: </label>
                <input type="number" name="v<?=$i?>" id="v<?=$i?>" class="form-control">
            </div>
        <?php } ?>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor_mult" class="form-label">Informe o valor a ser multiplicado: </label>
                <input type="number" name="valor_mult" id="valor_mult" class="form-control">
            </div>
        </div>
        
        <br>
        <div class="row">
            <div class="col">
            <button type="submit" class="btn btn-warning">Calcular</button>
            </div>
        </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>