<!doctype html>
<html lang="en">

<head>
    <title>Praticando 1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=deviTitlece-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container">
    <header>
        <h1>Exemplo CEP com Composer</h1>
        <hr>
    </header>

    <main>
        <form method="POST">
            <div class="row">
                <div class="mb-3 col-3">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control" id="cep" name="cep" inputmode="numeric" title="Digite o CEP no formato 00000-000" pattern="[0-9]{5}-[0-9]{3}" maxlength="9" placeholder="00000-000">
                    <!--<input type="text" class="form-control" id="cep" name="cep">-->
                </div>
            </div>
            <button type="submit" class="btn btn-success me-2">Enviar</button>
            <a href="index.php" class="btn btn-warning mx-2">Limpar</a>
        </form>

        <?php

        use Claudsonm\CepPromise\CepPromise;
        use Claudsonm\CepPromise\Exceptions\CepPromiseException;

        try {
            if (isset($_POST["cep"]) && !empty($_POST["cep"])) {
                $cep = $_POST["cep"];
                require 'vendor/autoload.php';
                $address = CepPromise::fetch($cep);
                echo '<div class="mt-3 container border border-2 border-success bg-success-subtle"> <h1>CEP: ' . vsprintf("%s%s%s%s%s-%s%s%s", str_split($address->zipCode)) . '</h1>';
                echo '<p>Rua: ' .  $address->street . '</p>';
                echo '<p>Bairro: ' .  $address->district . '</p>';
                echo '<p>Cidade: ' .  $address->city . '</p>';
                echo '<p>Estado: ' .  $address->state . '</p> </div>';
            }
        } catch (CepPromiseException $e) {
            $errors = $e->toArray();
            echo '<div class="mt-3 container border border-2 border-danger bg-danger-subtle"> <h1>CEP: ' . $cep . '</h1>
            <p>Detalhes do erro:</p> <ul>';
            foreach ($errors['errors'] as $error) {
                if ($error['message'] === 'A autenticacao de null falhou!') {
                    echo "<li>CEP INVÁLIDO(na base dos " . $error['provider'] . ").</li>";
                } else {
                    echo "<li>" . $error['message'] . "</li>";
                }
            }
            echo "</ul></div>";
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cep').mask('00000-000');
        });
    </script>
</body>

</html>