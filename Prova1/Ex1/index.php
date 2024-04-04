<?php
require '../include/header.php';
?>

<h1 class="order-1 margem">Exercício 1 - Gerador de página 2.0</h1>
</header>

</div>

<main class="container d-flex w-100 mt-5">
    <form class="form-container mx-auto" action="destino.php" method="POST">
        <div class="form-group">
            <label for="titulo">Título da página:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título da página" required>
            <select class="form-select mt-2" id="alinhamento_pag" name="alinhamento_pag" require>
                <option selected value="left">Esquerda</option>
                <option value="center">Centrazilizado</option>
                <option value="right">Direita</option>
            </select>
        </div>
        <div class="form-group">
            <label for="corpo">Corpo:</label>
            <textarea class="form-control" id="corpo" name="corpo" rows="3" placeholder="Digite o corpo da página" required></textarea>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="url" class="form-control" id="imagem" name="imagem" placeholder="Insira a URL da imagem" required>
            <select class="form-select mt-2" id="mostrarimagem" name="mostrarimagem" required>
                <option selected value="inline">No corpo da página</option>
                <option value="background">No plano de fundo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cor">Cor texto:</label>
            <input type="color" class="form-control" id="cor" name="cor">
        </div>
        <div class="form-row mt-3 justify-content-center">
            <button type="submit" class="btn btn-primary mx-2">Enviar</button>
            <button type="reset" class="btn btn-warning mx-2">Limpar</button>
            <button type="button" id="limparcookies" class="btn btn-warning mx-2">Limpar Cookies</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</main>