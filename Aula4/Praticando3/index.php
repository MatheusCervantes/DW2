<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Praticano 3 - Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body class="container">
    <h1>Praticando 3 - Animais</h1>
    <hr>

    <?php
    $bicho = filter_input(INPUT_GET, "bicho", FILTER_SANITIZE_SPECIAL_CHARS);
    $ultimo = filter_input(INPUT_GET, "ultimo", FILTER_SANITIZE_SPECIAL_CHARS);
    $ultimo_clicado = filter_input(INPUT_GET, "ultimo_clicado", FILTER_SANITIZE_SPECIAL_CHARS);
    
    if (empty($ultimo) && $ultimo_clicado != null) {
        //Atualização caso seja o segundo clique
        $ultimo = '<h3>Últimos clicados</h3>';
        $ultimo .= $ultimo_clicado . '<br>';
        $ultimo_clicado = $bicho;
    } else if (!empty($ultimo)) {
        //Atulizar o último clicado a partir do terceiro clique em diante
        $ultimo .= $ultimo_clicado . '<br>';
        $ultimo_clicado = $bicho;
    } else {
        //Utilizado para atualizar o último clicado caso seja o primeiro cliquei
        $ultimo_clicado = $bicho;
    }
    ?>

    <div class="d-flex justify-content-center">
        <a href="index.php?bicho=Gato&ultimo=<?= $ultimo ?>&ultimo_clicado=<?= $ultimo_clicado ?>">
            <figure>
                <img id="Gato" src="https://i.pinimg.com/originals/d8/8f/f6/d88ff65735a13bb3a95db0575278f960.jpg"
                    alt="gato">
            </figure>
        </a>
        <a href="index.php?bicho=Cachorro&&ultimo=<?= $ultimo ?>&ultimo_clicado=<?= $ultimo_clicado ?>">
            <figure>
                <img id="Cachorro" src="https://i.pinimg.com/originals/89/6d/c3/896dc3f0f25d9701645f4cd58c5e1308.jpg"
                    alt="cachorro">
            </figure>
        </a>
        <a href="index.php?bicho=Hamster&&ultimo=<?= $ultimo; ?>&ultimo_clicado=<?= $ultimo_clicado ?>">
            <figure>
                <img id="Hamster" src="https://images8.alphacoders.com/394/394170.jpg" alt="hamster">
            </figure>
        </a>
        <a href="index.php?bicho=Lagartixa&&ultimo=<?= $ultimo; ?>&ultimo_clicado=<?= $ultimo_clicado ?>">
            <figure>
                <img id="Lagartixa" src="https://w.forfun.com/fetch/02/02a707bfc5d1e698e3f791806af90b23.jpeg"
                    alt="largatixa">
            </figure>
        </a>
    </div>

    <?php

    switch ($bicho) {
        case 'Gato';
            echo "<p>Você clicou no <b>Gato</b>.</p><p>O Gato é um mamífero da família dos felídeos.</p>";
            break;
        case 'Cachorro';
            echo "<p>Você clicou no <b>Cachorro</b>.</p><p>O Cachorro é um mamífero da família dos canídeos.</p>";
            break;
        case 'Hamster';
            echo "<p>Você clicou no <b>Hamster</b>.</p><p>O Hamster é um mamífero roedor da subfamília dos Cricetinae.</p>";
            break;
        case 'Lagartixa';
            echo "<p>Você clicou na <b>Lagartixa</b>.</p><p>A Lagartixa doméstica tropical é uma espécie de lagarto de pequenas dimensões frequentemente encontrada nos lares brasileiros.</p>";
            break;
    }

    if ($ultimo_clicado != null) {
        echo html_entity_decode($ultimo);
    }
    ?>

    <br>
    <a href="index.php">Limpar</a>

    <style>
        img {
            width: 92%;
            border: solid 2px black;
        }

        <?= '#' . $bicho ?>
            {
            border: solid 5px red;
        }
    </style>
</body>

</html>