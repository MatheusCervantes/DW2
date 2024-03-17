<!doctype html>
<html lang="en">

<head>
    <title>Logs</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Michroma&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item d-flex nowrap align-items-center">
                            <div>
                                <img src="imagens/logs.png" alt="Logo" width="40" height="40" class="d-inline-block align-top">
                            </div>
                            <div class="nav-link active inicio" aria-current="page" href="">Logs de Acesso</div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php
        $senha = $_POST['senha'];
        if ($senha != 'senha_da_nasa') {
            echo '<div class="container border border-dark mt-5 mb-5 p-4"> 
                <p>Acesso negado.</p>
                </div>';
        } else {
            echo '<div class="container border border-dark mt-5 mb-5 p-4">
                        <p>Página <b>inicio.php</b>:';
            $inicio = file_get_contents('banco/inicio.txt');
            echo $inicio . ' Acessos.</p>
                        <p>Página <b>sobre.php</b>:';
            $sobre = file_get_contents('banco/sobre.txt');
            echo $sobre . ' Acessos.</p>
                        <p>Página <b>contato.php</b>:';
            $contato = file_get_contents('banco/contato.txt');
            echo $contato . ' Acessos.</p>
                        <p><b>Total</b>:';
            $total = file_get_contents('banco/total.txt');
            echo $total . ' Acessos.</p>
                        <hr>
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">PÁGINA</th>
                                    <th scope="col">DATA - HORA</th>
                                    <th scope="col">NAVEGADOR</th>
                                </tr>
                            </thead>
                            <tbody>';
            $log = file_get_contents('banco/log.txt');
            echo $log . '</tbody> </table> </div>';
        }
        ?>
    </main>

    <footer class="navbar navbar-expand-lg navbar-dark bg-dark p-4 footer">

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</body>

</html>