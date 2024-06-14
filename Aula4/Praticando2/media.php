<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Calculadora Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .vermelho {
            color: red;
        }

        .amarelo {
            color: yellow;
        }

        .verde {
            color: green;
        }

        span {
            text-decoration: underline;
        }
    </style>

</head>

<body class="container">
    <?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3  = $_POST["nota3"];
    $media = ($nota1 + $nota2 + $nota3) / 3;
    ?>
    <h1 class="mt-3">Praticando - Calculadora média</h1>

    <p>Um aluno com as notas <b><?= $nota1 ?></b>, <b><?= $nota2 ?></b> e <b><?= $nota3 ?></b> tem uma média igual a <b><?= $media ?></b></p>

    <br>
    <br>

    <p>Com essa média o aluno está <b><?php if ($media >= 6) {
                                            echo '<span class="verde">APROVADO</span>';
                                        } else if ($media >= 4) {
                                            echo '<span class="amarelo">DE RECUPERAÇÃO</span>';
                                        } else {
                                            echo '<span class="vermelho">REPROVADO</span>';
                                        } ?></b></p>
</body>

</html>