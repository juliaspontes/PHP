<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row">
            <div class="col">
                <label for="data" class="form-label">Informe a data</label>
                <input type="text" name="data" id="data" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Verificar Data</button>
    </div>
    
    <?php
// Função para verificar se a data é válida
function validarData($data) {
    $dataArr = explode('/', $data);
    
    // Verifica se a data possui três partes (dia, mês e ano)
    if (count($dataArr) != 3) {
        return false;
    }
    
    // Extrai o dia, mês e ano
    list($dia, $mes, $ano) = $dataArr;
    
    // Verifica se a data é válida usando checkdate
    if (checkdate($mes, $dia, $ano)) {
        return true;
    } else {
        return false;
    }
}

// Função para obter o dia da semana
function obterDiaSemana($data) {
    $timestamp = strtotime($data);
    $diaSemana = date('l', $timestamp);
    return $diaSemana;
}

// Lê a data do usuário
$data = readline("Digite uma data (DD/MM/AAAA): ");

// Verifica se a data é válida
if (validarData($data)) {
    // Obtém o dia da semana
    $diaSemana = obterDiaSemana($data);
    echo "A data $data é válida e corresponde a um(a) $diaSemana.\n";
} else {
    echo "A data $data não é válida.\n";
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>