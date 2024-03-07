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
        <h1>Destino</h1>
        <hr>
    </header>

    <main>
        <h1>Dados da requisição: </h1>

        <div class="border border-success">
            <?php
            $dados = $_POST["checkbox"];
            var_dump($dados);
            ?>
        </div>

        <br>
        <h1>Interesses selecionados (em ordem alfabética)</h1>
        <?php
        sort($dados);
        if(count($dados) > 3) {
            $mensagem = '<ul>';
            for ($aux = 0; $aux < 3; $aux++){
                $mensagem .= '<li>' . $dados[$aux] . '</li>';
            }
            $mensagem .= '<li>...</li> </ul>';
            echo $mensagem;  
        } else {
            $mensagem = '<ul>';
            foreach ($dados as $key => $value) {
                $mensagem .= '<li>' . $value . '</li>';
            }
            $mensagem .= '</ul>';
            echo $mensagem;   
        }
        ?>

        <br><br>

        <a href="index.php">Voltar para o Formulário</a>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>