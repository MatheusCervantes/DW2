<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Destino GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="mt-3">Destino GET</h1>
        <hr>
        <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p>Nome informado: $nome <br> Email: $email</p>"
        ?>

        <p>
            <a href="destino-get.php?nome=Matheus&email=matheus.cervantes@aluno.ifsp.edu.br&&cor=<?=$cor?>">
                Enviar dados [nome = Matheus] | email = matheus.cervantes@aluno.ifsp.edu.br]
            </a>

            <br>
            <a href="destino-get.php?nome=Matheus Cervantes&email=matheuscervantes1@gmail.com&&cor=<?=$cor?>">
                Enviar dados [nome = Matheus Cervantes] | email = matheuscervantes1@gmail.com]
            </a>

            <br>
            <a href="destino-get.php">Limpar</a>

            <br>
            <br>
        </p>

        <div class="d-flex justify-content-evenly">
            <a href="destino-get.php?nome=<?=$nome?>&&email=<?=$email?>&&cor=red">
                <div class="quadrado bg-danger border border-black"></div>
            </a>

            <a href="destino-get.php?nome=<?=$nome?>&&email=<?=$email?>&&cor=green">
                <div class="quadrado bg-success border border-black"></div>
            </a>

            <a href="destino-get.php?nome=<?=$nome?>&&email=<?=$email?>&&cor=blue">
                <div class="quadrado bg-primary border border-black"></div>
            </a>
        </div>

        <style>
            body {
                background-color: <?php echo $cor ?>;
            }

            .quadrado {
                width: 10em;
                height: 10em;
            }
        </style>
    </div>
</body>

</html>