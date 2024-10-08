<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 60%;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1>Formulário</h1>
            <hr>
            <form class="form-container mx-auto" action="pagina.php" method="POST">
                <div class="form-group">
                    <label for="titulo">Título da página:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título da página">
                </div>
                <div class="form-group">
                    <label for="corpo">Corpo:</label>
                    <textarea class="form-control" id="corpo" name="corpo" rows="3"
                        placeholder="Digite o corpo da página"></textarea>
                </div>
                <div class="form-group">
                    <label for="corTexto">Cor texto:</label>
                    <input type="color" class="form-control" id="corTexto" name="corTexto">
                </div>
                <div class="form-group">
                    <label for="urlImagem">URL de uma imagem:</label>
                    <input type="url" class="form-control" id="urlImagem" name="urlImagem" placeholder="Insira a URL da imagem">
                </div>
                <div class="form-group">
                    <label for="urlLink">URL de link:</label>
                    <input type="url" class="form-control" id="urlLink" name="urlLink" placeholder="Insira a URL do link">
                </div>
                <div class="form-group">
                    <label for="corFundo">Cor de plano de fundo da página:</label>
                    <input type="color" class="form-control" id="corFundo" name="corFundo">
                </div>
                <div class="form-row mt-3 justify-content-center">
                    <button type="submit" class="btn btn-primary mx-2">Enviar</button>
                    <button type="reset" class="btn btn-warning mx-2">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
