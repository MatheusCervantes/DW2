<?php
require 'include/header.php';
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="imagens/logs.png" alt="Logo" width="40" height="40" class="d-inline-block align-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <div class="nav-link active inicio">Logs de Acesso</div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Início</a>
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
    function getid($pagina)
    {
        $dados = json_decode(file_get_contents('banco/banco.json'), true);
        foreach ($dados as $entrada) {
            if ($entrada['pagina'] == $pagina) {
                $id = $entrada['id'];
            }
        }
        return $id;
    }

    function show_data()
    {
        $dados = json_decode(file_get_contents('banco/banco.json'), true);
        foreach ($dados as $entrada) {
            echo "<tr><th>" . $entrada['id'] . "</th><th>" . $entrada['pagina'] . "</th><th>" . $entrada['data_hora'] . "</th><th>" . $entrada['navegador'] . "</th></tr>";
        }
    }

    $senha = $_POST['senha'];
    if ($senha != 'senha_da_nasa') {
        echo '<div class="container border border-dark mt-5 mb-5 p-4"> 
                <p>Acesso negado.</p>
                </div>';
    } else {
        echo '<div class="container border border-dark mt-5 mb-5 p-4">
                        <p>Página <b>inicio.php</b>: ';
        $inicio = getid('inicio.php');
        echo $inicio . ' Acessos.</p>
                        <p>Página <b>sobre.php</b>: ';
        $sobre = getid('sobre.php');
        echo $sobre . ' Acessos.</p>
                        <p>Página <b>contato.php</b>: ';
        $contato = getid('contato.php');
        echo $contato . ' Acessos.</p>
                        <p><b>Total</b>: ';
        $total = getid('inicio.php') + getid('sobre.php') + getid('contato.php');
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
        show_data();
        echo '</tbody> </table> </div>';
    }

    /*Código com arquivo txt
    $senha = $_POST['senha'];
        if ($senha != 'senha_da_nasa') {
            echo '<div class="container border border-dark mt-5 mb-5 p-4"> 
                <p>Acesso negado.</p>
                </div>';
        } else {
            echo '<div class="container border border-dark mt-5 mb-5 p-4">
                        <p>Página <b>inicio.php</b>: ';
            $inicio = file_get_contents('banco/inicio.txt');
            echo $inicio . ' Acessos.</p>
                        <p>Página <b>sobre.php</b>: ';
            $sobre = file_get_contents('banco/sobre.txt');
            echo $sobre . ' Acessos.</p>
                        <p>Página <b>contato.php</b>: ';
            $contato = file_get_contents('banco/contato.txt');
            echo $contato . ' Acessos.</p>
                        <p><b>Total</b>: ';
            $total = intval(file_get_contents('banco/inicio.txt')) + intval(file_get_contents('banco/sobre.txt')) + intval(file_get_contents('banco/contato.txt'));
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
    */

    ?>
</main>

<?php
require 'include/footer.php';
?>