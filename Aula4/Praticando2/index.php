<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Calculadora Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <style>
        form {
            max-width: 20%;
        }
    </style>    
</head>

<body class="container">
        <h1 class="mt-3">Praticando 2 - Calculadora média</h1>
        <hr>
        <form class="row g-3" action="media.php" method="POST">
            <div class="col-12">
                <label for="nota1" class="form-label">Nota 1:</label>
                <input type="text" class="form-control" id="nota1" name="nota1">
            </div>
            <div class="col-12">
                <label for="nota2" class="form-label">Nota 2:</label>
                <input type="text" class="form-control" id="nota2" name="nota2">
            </div>
            <div class="col-12">
                <label for="nota3" class="form-label">Nota 3:</label>
                <input type="text" class="form-control" id="nota3" name="nota3">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">Calcular Média</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
</body>

</html>