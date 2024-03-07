<!doctype html>
<html lang="en">

<head>
    <title>Praticando 1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=deviTitlece-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container">
    <header>
        <h1>Tabuada</h1>
        <hr>
    </header>

    <main>
        <form method="GET">
            <div class="row">
                <div class="mb-3 col-3">
                    <label for="titulo">Número:</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                </div>
            </div>
            <button type="submit" class="btn btn-success me-2">Enviar</button>
            <a href="index.php" class="btn btn-warning mx-2">Limpar</a>
        </form>

        <?php
        $numero = isset($_GET["numero"]) ? $_GET["numero"] : null;

        if (!empty($numero)) {
            echo '<br><h2>Tabuada do ' . $numero . '</h2><hr>';

            for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
                echo $numero . ' x ' . $multiplicador . ' = ' . $multiplicador * $numero . '<br>';
            }
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>