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
    if (
        isset($_POST["titulo"]) && isset($_POST["corpo"]) && isset($_POST["imagem"])
        && isset($_POST["alinhamento_pag"]) && isset($_POST["mostrarimagem"]) && isset($_POST["cor"])
    ) {
        $titulo = $_POST["titulo"];
        $corpo = $_POST["corpo"];
        $imagem  = $_POST["imagem"];
        $alinhamento = $_POST["alinhamento_pag"];
        $mostrarimagem = $_POST["mostrarimagem"];
        $cor = $_POST["cor"];

        setcookie('cookieTITULO', $titulo, time() + 60 * 60);
        setcookie('cookieALINHAMENTO', $corpo, time() + 60 * 60);
        setcookie('cookieCORPO', $imagem, time() + 60 * 60);
        setcookie('cookieIMAGEM', $alinhamento, time() + 60 * 60);
        setcookie('cookieMOSTRARIMG', $mostrarimagem, time() + 60 * 60);
        setcookie('cookieCOR', $cor, time() + 60 * 60);
    } else {
        if (isset($_COOKIE['cookieTITULO'])) {
            $titulo = $_COOKIE['cookieTITULO'];
        }

        if (isset($_COOKIE['cookieALINHAMENTO'])) {
            $alinhamento = $_COOKIE['cookieALINHAMENTO'];
        }

        if (isset($_COOKIE['cookieCORPO'])) {
            $corpo = $_COOKIE['cookieCORPO'];
        }

        if (isset($_COOKIE['cookieIMAGEM'])) {
            $imagem  = $_COOKIE['cookieIMAGEM'];
        }

        if (isset($_COOKIE['cookieMOSTRARIMG'])) {
            $mostrarimagem = $_COOKIE['cookieMOSTRARIMG'];
        }

        if (isset($_COOKIE['cookieCOR'])) {
            $cor = $_COOKIE['cookieCOR'];
        }
    }

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