<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="my-3">Formulário de cadastro</h1>
        <hr>

        <div class="row">
            <div class="col-8">
                <form class="row g-3" action="#" method="POST">
                    <div class="col-12">
                        <div class="mb-2">
                            <label for="nome">Nome completo:</label>
                            <input class="form-control" type="text" name="nome" id="nome" required value="<?php echo isset($_COOKIE['cookieNOME']) ? $_COOKIE['cookieNOME'] : ''; ?>">
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="tel">Telefone</label>
                        <input class="form-control" type="tel" name="tel" id="tel" placeholder="(DD)XXXXX-XXXX" required value="<?php echo isset($_COOKIE['cookieTEL']) ? $_COOKIE['cookieTEL'] : ''; ?>">
                    </div>
                    <div class="col-md-8 mb-2">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email" required value="<?php echo isset($_COOKIE['cookieEMAIL']) ? $_COOKIE['cookieEMAIL'] : ''; ?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="cpf">CPF</label>
                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX" required value="<?php echo isset($_COOKIE['cookieCPF']) ? $_COOKIE['cookieCPF'] : ''; ?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="date">Data de Nascimento</label>
                        <input class="form-control" type="date" name="date" id="date" required value="<?php echo isset($_COOKIE['cookieDATE']) ? $_COOKIE['cookieDATE'] : ''; ?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="cep">CEP</label>
                        <input class="form-control" type="text" name="cep" id="cep" placeholder="XX.XXX-XXX" required pattern="\d{2}\.\d{3}-\d{3}" title="Digite o CEP no formato XX.XXX-XXX" value="<?php echo isset($_COOKIE['cookieCEP']) ? $_COOKIE['cookieCEP'] : ''; ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                        <button type="buttun" class="btn btn-danger" id="limpar">Limpar Cookies</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img src="imagem/img.png" style="width: 60%;" class="img-fluid mt-4">
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="script/script.js"></script>
</body>

</html>