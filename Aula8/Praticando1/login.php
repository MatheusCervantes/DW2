<?php
require 'include/header.php';

if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Usuário já está autenticado.";
    header("Location: inicio.php");
}
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-3" >
            <form method="POST" action="destino-login.php">
                <div class="row"> 
                    <div class="mb-3 col-12">
                        <label for="user">Usuário:</label>
                        <input type="text" class="form-control" id="user" name="user" value="matheuscervantes">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" value="senha_da_nasa">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary me-2">Enviar</button>
                    <button type="reset" class="btn btn-warning mx-2">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require 'include/footer.php';
?>