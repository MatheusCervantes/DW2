<?php
require 'include/header.php';

if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Usuário já está autenticado.";
    header("Location: inicio.php");
} else {

    $user = $_POST["user"];
    $senha = $_POST["senha"];

    if ($user == "matheuscervantes") {
        if ($senha == "senha_da_nasa") {
            $_SESSION["user"] = $user;
            header("Location: inicio.php");
        } else {
            unset($_SESSION["user"]);
            echo '
        <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Autenticação</h1>
            </div>

            <div class="container bg-danger-subtle border border-danger rounded text-danger p-2">
                <h2>Falha ao efetuar autenticação</h2>
                <div class="container">
                    <p>O usuário não foi encontrado.</p>
                    <p>Verifique as informações e tente novamente.</p>
                </div>
                <hr>
                <div class="container">
                    <p>
                        <a href="login.php">Clique aqui para voltar</a>
                    </p>
                </div>
            </div>
        </div>';
            require 'include/footer.php';
        }
    } else {
        unset($_SESSION["user"]);
    }
}
