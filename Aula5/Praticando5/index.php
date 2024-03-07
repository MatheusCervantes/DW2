<!doctype html>
<html lang="en">

<head>
    <title>Praticando 5</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container">
    <header>
        <h1>Formulário</h1>
        <hr>
    </header>

    <main>
        <form method="POST" action="destino.php">
            <div class="form-group">
                <label for="interesses">Escolha alguns interesses:</label><br>
                <div class="row">
                    <div class="col-md-3">
                        <input type="checkbox" id="esportes" name="checkbox[]" value="Esportes">
                        <label for="esportes">Esportes</label><br>
                        <input type="checkbox" id="futebol" name="checkbox[]" value="Futebol">
                        <label for="futebol">Futebol</label><br>
                        <input type="checkbox" id="basquete" name="checkbox[]" value="Basquete">
                        <label for="basquete">Basquete</label><br>
                        <input type="checkbox" id="tenis" name="checkbox[]" value="Tênis">
                        <label for="tenis">Tênis</label><br>
                        <input type="checkbox" id="tekwondo" name="checkbox[]" value="Tekwondo">
                        <label for="tekwondo">Tekwondo</label><br>
                        <input type="checkbox" id="tecnologia" name="checkbox[]" value="Tecnologia">
                        <label for="tecnologia">Tecnologia</label><br>
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" id="smartphones" name="checkbox[]" value="Smartphones">
                        <label for="smartphones">Smartphones</label><br>
                        <input type="checkbox" id="computadores" name="checkbox[]" value="Computadores e hardware">
                        <label for="computadores">Computadores e hardware</label><br>
                        <input type="checkbox" id="desktop_games" name="checkbox[]" value="Desktop games">
                        <label for="desktop_games">Desktop games</label><br>
                        <input type="checkbox" id="notebooks" name="checkbox[]" value="Notebooks">
                        <label for="notebooks">Notebooks</label><br>
                        <input type="checkbox" id="veiculos" name="checkbox[]" value="Veículos">
                        <label for="veiculos">Veículos</label><br>
                        <input type="checkbox" id="escritorio" name="checkbox[]" value="Escritório">
                        <label for="escritorio">Escritório</label><br>
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" id="vestuario" name="checkbox[]" value="Vestuário">
                        <label for="vestuario">Vestuário</label><br>
                        <input type="checkbox" id="perfumes" name="checkbox[]" value="Perfumes">
                        <label for="perfumes">Perfumes</label><br>
                        <input type="checkbox" id="economia" name="checkbox[]" value="Economia">
                        <label for="economia">Economia</label><br>
                        <input type="checkbox" id="comidas" name="checkbox[]" value="Comidas">
                        <label for="comidas">Comidas</label><br>
                        <input type="checkbox" id="bebidas" name="checkbox[]" value="Bebidas">
                        <label for="bebidas">Bebidas</label><br>
                        <input type="checkbox" id="imoveis" name="checkbox[]" value="Imóveis">
                        <label for="imoveis">Imóveis</label><br>
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" id="calcados" name="checkbox[]" value="Calçados">
                        <label for="calcados">Calçados</label><br>
                        <input type="checkbox" id="hoteis" name="checkbox[]" value="Hotéis">
                        <label for="hoteis">Hotéis</label><br>
                        <input type="checkbox" id="pousadas" name="checkbox[]" value="Pousadas">
                        <label for="pousadas">Pousadas</label><br>
                        <input type="checkbox" id="cinema" name="checkbox[]" value="Cinema">
                        <label for="cinema">Cinema</label><br>
                        <input type="checkbox" id="filmes" name="checkbox[]" value="Filmes">
                        <label for="filmes">Filmes</label><br>
                        <input type="checkbox" id="series" name="checkbox[]" value="Séries">
                        <label for="series">Séries</label><br>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>