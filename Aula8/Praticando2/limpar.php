<?php
$dados = json_encode(array(
    "nome" => '',
    "email" => '',
    "cor" => ''
));
setcookie("ultimosdados", $dados, time() + 7 * 24 * 60 * 60);
header("Location: destino-get.php");