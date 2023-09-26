<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="Resposta1.php">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Cadastro</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="Resposta1.php">
                            
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"  placeholder="Seu Nome">
                            </div>

                            
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF">
                            </div>

                            
                            <div class="mb-3">
                                <label for="datanascimento" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="datanascimento" name="datanascimento">
                            </div>

                            
                            <div class="mb-3">
                                <label class="form-label">Sexo</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexo-masculino" value="Masculino">
                                        <label class="form-check-label" for="sexo-masculino">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexo-feminino" value="Feminino">
                                        <label class="form-check-label" for="sexo-feminino">Feminino</label>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="mb-3">
                                <label for="estado-civil" class="form-label">Estado Civil</label>
                                <select class="form-select" id="estado-civil" name="estadocivil">
                                    <option value="solteiro">Solteiro</option>
                                    <option value="casado">Casado</option>
                                    <option value="divorciado">Divorciado</option>
                                    <option value="viuvo">Viúvo</option>
                                </select>
                            </div>

                            
                            <div class="mb-3">
                                <label for="renda-mensal" class="form-label">Renda Mensal</label>
                                <input type="number" class="form-control" id="renda-mensal" name="rendamensal" placeholder="Sua Renda Mensal">
                            </div>

                            
                            <h3 class="mb-3">Endereço</h3>
                            <div class="mb-3">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Seu Logradouro">
                            </div>
                            <div class="mb-3">
                                <label for="numero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
                            </div>
                            <div class="mb-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                            </div>
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select class="form-select" id="estado" name="estado">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Sua Cidade">
                            </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="arquivo" class="form-label">
                                            Encaminhe sua foto:
                                        </label>
                                        <input type="file" class="form-control" name="arquivo"
                                        id="arquivo"/>
                                    </div>
                                </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger" style="margin-top: 30px;">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>