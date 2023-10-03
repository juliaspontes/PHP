<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Meu Site Bootstrap</title>
</head>
<body>
    <h1>Bem vindo <?= $params[1] ?>!</h1>
    <header>
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Meu Site</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <!-- Conteúdo principal -->
        <div class="row">
            <div class="col-md-8">
                <h1>Bem-vindo ao Meu Site</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac urna in ex lacinia laoreet.</p>
            </div>
            <div class="col-md-4">
                <h3>Sidebar</h3>
                <p>Conteúdo da barra lateral.</p>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-light text-center py-3">
        <!-- Rodapé -->
        <div class="container">
            &copy; 2023 Meu Site
       
