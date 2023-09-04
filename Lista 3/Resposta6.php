<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        if (($_POST['produtos']) && ($_POST['precos'])) {
            $produtos = $_POST['produtos'];
            $precos = $_POST['precos'];

            $qtdProdutosAbaixo50 = 0;
            $produtosEntre50e100 = [];
            $somaPrecosSuperior100 = 0;
            $qtdProdutosSuperior100 = 0;

            for ($i = 0; $i < count($produtos); $i++) {
                if ($precos[$i] < 50) {
                    $qtdProdutosAbaixo50++;
                } elseif ($precos[$i] >= 50 && $precos[$i] <= 100) {
                    $produtosEntre50e100[] = $produtos[$i];
                } elseif ($precos[$i] > 100) {
                    $somaPrecosSuperior100 += $precos[$i];
                    $qtdProdutosSuperior100++;
                }
            }

            echo '<p>Quantidade de produtos com preço inferior a R$50,00: ' . $qtdProdutosAbaixo50 . '</p>';
            if (!empty($produtosEntre50e100)) {
                echo '<p>Produtos com preço entre R$50,00 e R$100,00: ' . implode(', ', $produtosEntre50e100) . '</p>';
            } else {
                echo '<p>Nenhum produto com preço entre R$50,00 e R$100,00.</p>';
            }
            if ($qtdProdutosSuperior100 > 0) {
                $mediaPrecosSuperior100 = $somaPrecosSuperior100 / $qtdProdutosSuperior100;
                echo '<p>Média dos preços dos produtos com preço superior a R$100,00: R$' . number_format($mediaPrecosSuperior100, 2, ',', '.') . '</p>';
            } else {
                echo '<p>Nenhum produto com preço superior a R$100,00.</p>';
            }
        } else {
            echo '<p class="alert alert-danger">Nenhum produto e preço foram enviados.</p>';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>