<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body class="container">
    <?php

    //Utilizado para fazer sem cookies
    $titulo = $_POST["titulo"];
    $corpo = $_POST["corpo"];
    $imagem  = $_POST["imagem"];
    $alinhamento = $_POST["alinhamento_pag"];
    $mostrarimagem = $_POST["mostrarimagem"];
    $cor = $_POST["cor"];

    echo '<h1 class = "alinhamento">' . $titulo . '</h1> <hr>';
    echo '<p class = "alinhamento">' . $corpo . '</p>';
    if ($mostrarimagem == 'inline') {
        echo '<div class = "alinhamento">
                <figure class="imagem">
                    <img src="' . $imagem . '" alt="">
                </figure>
            </div>';
    }

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y - H:i:s');
    echo '<p class = "alinhamento">Página gerada em: ' . $data . '</p>';
    ?>

    <style>
        body {
            color: <?= $cor ?>;
            margin: 1% 3% 1% 3%;
            <?php
            if ($mostrarimagem == 'background') {
                echo 'background-image: url("' . $imagem . '");';
            }
            ?>
        }

        figure>img {
            width: 60%;
        }

        h1 {
            font-size: 400%;
        }

        p {
            font-size: 150%;
        }

        .alinhamento {
            display: flex;
            justify-content: <?= $alinhamento ?>;
            text-align: <?= $alinhamento ?>;
            flex-wrap: wrap;
        }
    </style>
</body>

</html>