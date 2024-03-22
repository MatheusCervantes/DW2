<!doctype html>
<html lang="en">

<head>
    <title>Praticando 2</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=deviTitlece-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container">
    <?php
    $inicio = $_POST["inicio"];
    $final = $_POST["final"];
    $incremento = $_POST["incremento"];

    echo "<h1>Contador</h1><hr>         
    <h1>Parâmentros informados: </h1>
    Início: $inicio <br>
    Final: $final <br>
    Incremento: $incremento <br><br>";

    if ($inicio > $final) {
        for (; $final < $inicio && $inicio >= 0; $inicio -= $incremento) {
            echo "$inicio ";
        }
    } else {
        for (; $final > $inicio && $inicio >= 0; $inicio += $incremento) {
            echo "$inicio ";
        }
    }

    ?>

</body>

</html>