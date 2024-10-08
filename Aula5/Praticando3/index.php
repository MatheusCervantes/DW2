<!doctype html>
<html lang="en">

<head>
    <title>Praticando 3</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=deviTitlece-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        #primo>span {
            padding: 1em;
            background-color: lightgreen;
            border: 1px green solid;
        }

        #nprimo>span {
            padding: 1em;
            background-color: lightcoral;
            border: 1px red solid;
        }
    </style>
</head>

<body class="container">
    <header>
        <h1>Praticando 3 - Número primos</h1>
        <hr>
    </header>

    <main>
        <div class="d-flex justify-content-evenly">
            <a href="index.php?numero=1">Número 1</a>
            <a href="index.php?numero=2">Número 2</a>
            <a href="index.php?numero=3">Número 3</a>
            <a href="index.php?numero=5">Número 5</a>
            <a href="index.php?numero=20">Número 20</a>
            <a href="index.php?numero=32">Número 32</a>
            <a href="index.php?numero=37">Número 37</a>
        </div>

        <?php
        function ehPrimo($numero)
        {
            if ($numero <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        function verificarParOuImpar($numero)
        {
            if ($numero % 2 == 0) {
                return " Além disso ele é um número <span>PAR</span>";
            } else {
                return " Além disso ele é um número <span>ÍMPAR</span>";
            }
        }

        $numero = isset($_GET["numero"]) ? $_GET["numero"] : null;

        if (ehPrimo($numero) == true && $numero != null) {
            $mensagem = 'O número <span>' . $numero . '</span> <span>é</span> um número <span>PRIMO</span>.';
            $mensagem .= verificarParOuImpar($numero);
            $mensagem = '<p id="primo">' . $mensagem . '</p>';
            echo "<br> <br>$mensagem";
        } else if (ehPrimo($numero) != true && $numero != null) {
            $mensagem = 'O número <span>' . $numero . '</span> <span>não é</span> um número <span>PRIMO</span>.';
            $mensagem .= verificarParOuImpar($numero);
            $mensagem = '<p id="nprimo">' . $mensagem . '</p>';
            echo "<br> <br>$mensagem";
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>