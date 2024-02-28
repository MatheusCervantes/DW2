<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Página</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: <?php $corFundo = $_POST["corFundo"];
            echo $corFundo?>;
            color: <?php $corTexto = $_POST["corTexto"];
            echo $corTexto?>;
            margin: 1% 3% 1% 3%;
        }

        figure > img {
            width: 30%;
        }

        h1 {
            font-size: 400%;
        }

        p {
            font-size: 150%;
        }
    </style>    
</head>

<body>
        <?php 
            $titulo = $_POST["titulo"];
            $corpo = $_POST["corpo"];
            $urlImagem  = $_POST["urlImagem"];
            $urlLink = $_POST["urlLink"];

            echo "<h1>$titulo</h1> <hr>";
            echo "<p>$corpo</p>";
            echo '<div>
                    <figure class="imagem">
                        <img src="'.$urlImagem.'" alt="">
                        <figcaption> <a href="'.$urlLink.'" target="_blank">'.$urlLink.'</a>
                    </figure>
                  </div>';
        ?> 
</body>

</html>