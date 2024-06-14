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
    <div class="container border border-dark mt-5 mb-5 p-4">
        <div class="d-flex justify-content-center border-bottom border-dark">
            <div class="titulo p-4 mb-3">
                <h1>Logs</h1>
            </div>
        </div>
        <div class="mt-4">
            <form action="destino-logs.php" method="POST">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">
                        <label for="senha" class="form-label"><b>Chave de acesso:</b></label>
                    </div>
                    <div class="col-auto">
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="preencher_log"></div>
</main>

<?php
require 'include/footer.php';
?>