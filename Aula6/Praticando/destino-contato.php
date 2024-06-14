<?php
require 'include/header.php';
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>
</div>

<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y - H:i:s');
echo '<p>Nome informado: ' . $nome . '</p>
<p>E-mail: ' . $email . '
<p>Mensagem: ' . $mensagem . '
<p>Data: ' . $data . '</p>';

$dataarquivo = str_replace('/', '_', date('d/m/Y'));
$nomeArquivo = '../Contatos/Contato_' . $dataarquivo. '_'. rand(1,100000) .'.txt';
$conteudo = "Contato via site:\n
Data: $data
\nNome: $nome
E-mail: $email
Mensagem:  $mensagem
\n-------------------------------------------------------------------------------------";

file_put_contents($nomeArquivo, $conteudo);
?>

<a href="contato.php">
    <button type="button" class="btn btn-info">Voltar</button>
</a>


<?php
require 'include/footer.php';
?>