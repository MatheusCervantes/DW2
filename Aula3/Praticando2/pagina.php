<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
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