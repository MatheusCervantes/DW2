<?php
require 'include/header.php';
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Contato</h1>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-6">
            <form method="POST" action="destino-contato.php">
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                    </div>
                </div>
                <div class="mb-3 col-12">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" style="height: 100px"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success me-2">Enviar</button>
                    <button type="reset" class="btn btn-warning mx-2">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require 'include/footer.php';
?>