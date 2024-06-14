<?php
require 'include/header.php';

if (!isset($_SESSION["user"]) && empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Você está tentando acessar conteúdo restrito.";
    header("Location: inicio.php");
}
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Perfil</h1>
    </div>
</div>

<div class="container">
    <p>Nome: <b>Matheus Cervantes</b></p>
    <p>E-mail: <b>matheuscervantes1@gmail.com</b></p>
    <p>Telefone: <b>(17) 99999-9999</b></p>
    <p>Endereço: <b>Rua Amazonas</b></p>
    <p>Cidade: <b>Votuporanga</b></p>
    <p>Estado: <b>São Paulo</b></p>
</div>

<?php
require 'include/footer.php';
?>