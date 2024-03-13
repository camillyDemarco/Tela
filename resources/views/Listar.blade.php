<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>Listar</title>
</head>
<body>

<div class="container ">
            <div class="row align-items-start">
                <div class="col">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid text-bg-primary p-3">
                            <a class="navbar-brand text-light"  href="#">Sistema Web</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                <a class="nav-link active text-light" aria-current="page" href="#">Cadastrar</a>
                            <a class="nav-link disabled text-light" aria-disabled="true">Consultar</a>
                                 </div>
                            </div>
                        </div>
                    </nav>
                </div>  
            </div>

<div class="container">
    <div class="row">
        <div class="col">
            <br> <h4>Cadastrar - Agendamento de Ponteciais Clientes </h4>
            <h6>Sistema Utilizado para Agendamento de Serviços </h6><br>
        </div>
    </div>
</div>

    <div class="container text-center">
        <div class="row align-items-start ">
            <div class="col">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">nome</th>
                                <th scope="col">telefone</th>
                                <th scope="col">origem</th>
                                <th scope="col">data de nascimento</th>
                                <th scope="col">observaçao</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                    <td>Camilly</td>
                                    <td>(xx)xxxxx-xxxx</td>
                                    <td>celular</td>
                                    <td>dd/aa/mm</td>
                                    <td>sla</td>
                            </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                </tr>

                                <tr>
                                    <th scope="row">3</th>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                </tr>
                        </tbody>

                   </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>