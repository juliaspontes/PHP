<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <form action="Resposta10.php" method="POST">
    <br>
      <div class=container>  
        <div class="row">
            <div class="col">
                <label for="peso">Informe seu peso</label>
                <input type="number" step="0.01" name="peso" id="peso" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="altura">Informe sua altura</label>
                <input type="number" step="0.01" name="altura" id="altura" class="form-control">
            </div>
        </div>

        <br>

        <div class="row">
            <div  class="col"> 
                <button type="submit" class="btn btn-danger">Enviar</button>
            </div>
        </div>

        <br>

        <div class="row">
            <div class ="col">
                <a href="https://www.tuasaude.com/calculadora/imc/" target="">
                    <button type="button" class="btn btn-success">Mais informações</button>
                </a>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>