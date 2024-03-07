<!doctype html>
<html lang="en">

<head>
    <title>Praticando 4</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=deviTitlece-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        table>tbody>tr {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body class="container">
    <header>
        <h1>Praticando 4 - Gerador de tabela</h1>
        <hr>
    </header>
    <main>
        <?php
        $linhas = $_POST["linhas"];
        $colunas = $_POST["colunas"];
        $estilo = $_POST["estilo"];
        $mensagem;
        $mensagem = '<table class="table table-bordered table-striped ' . $estilo . '">
            <thead></thead>
            <tbody>';

        for ($line = $linhas; $line > 0; $line--) {
            $mensagem .= '<tr>';
            for ($col = $colunas; $col > 0; $col--) {
                $mensagem .= '<th scope="col">-</th>';
            }
            $mensagem .= '</tr>';
        }
        $mensagem .= '</tbody>
            </table>';

        echo $mensagem;
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>