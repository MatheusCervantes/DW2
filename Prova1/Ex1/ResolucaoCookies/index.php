<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .margem {
            margin-bottom: 0 !important;
        }
    </style>
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
    </svg>

    <div class="container border-bottom">
        <header class="d-flex flex-nowrap justify-content-between align-items-center py-3">
            <ul class="nav nav-pills order-2">
                <li class="nav-item"><a href="../../Ex1/" class="nav-link active ms-4" aria-current="page">Exercício 1</a></li>
                <li class="nav-item"><a href="../../Ex2/" class="nav-link active ms-4">Exercício 2</a></li>
                <li class="nav-item"><a href="../../Ex3/" class="nav-link active ms-4">Exercício 3</a></li>
                <li class="nav-item"><a href="../../Ex4/" class="nav-link active ms-4">Exercício 4</a></li>
            </ul>
            <h1 class="order-1 margem">Exercício 1 - Gerador de página 2.0</h1>
        </header>

    </div>

    <main class="container d-flex w-100 mt-5">
        <form class="form-container mx-auto" action="destino.php" method="POST">
            <div class="form-group">
                <label for="titulo">Título da página:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título da página" required>
                <select class="form-select mt-2" id="alinhamento_pag" name="alinhamento_pag" require>
                    <option selected value="left">Esquerda</option>
                    <option value="center">Centrazilizado</option>
                    <option value="right">Direita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="corpo">Corpo:</label>
                <textarea class="form-control" id="corpo" name="corpo" rows="3" placeholder="Digite o corpo da página" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="url" class="form-control" id="imagem" name="imagem" placeholder="Insira a URL da imagem" required>
                <select class="form-select mt-2" id="mostrarimagem" name="mostrarimagem" required>
                    <option selected value="inline">No corpo da página</option>
                    <option value="background">No plano de fundo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cor">Cor texto:</label>
                <input type="color" class="form-control" id="cor" name="cor">
            </div>
            <div class="form-row mt-3 justify-content-center">
                <button type="submit" class="btn btn-primary mx-2">Enviar</button>
                <button type="reset" class="btn btn-warning mx-2">Limpar</button>
                <button type="button" id="limparcookies" class="btn btn-warning mx-2">Limpar Cookies</button>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
        <script src="script/script.js"></script>
    </main>