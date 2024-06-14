<?php
require '../include/header.php';
?>

<h1 class="order-1 margem">Exercício 2 - Calculadora médias 2.0</h1>
</header>

</div>

<main class="container d-flex justify-content-between w-100 mt-5">
    <form class="g-3  flex-wrap w-30" method="POST">
        <div class="form-group pb-2">
            <label for="nota1" class="form-label">Nota Avaliações:</label>
            <input type="text" class="form-control" id="nota1" name="nota1" placeholder="Peso: 5.0" required>
        </div>
        <div class="form-group pb-2">
            <label for="nota2" class="form-label">Nota Trabalho:</label>
            <input type="text" class="form-control" id="nota2" name="nota2" placeholder="Peso: 2.0" required>
        </div>
        <div class="form-group pb-2">
            <label for="nota3" class="form-label">Nota praticando (em sala):</label>
            <input type="text" class="form-control" id="nota3" name="nota3" placeholder="Peso: 3.0" required>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Calcular Média</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </form>

    <div>
        <?php
        if (isset($_POST["nota1"]) && isset($_POST["nota2"]) && isset($_POST["nota3"])) {
            $nota1 = intval($_POST["nota1"]);
            $nota2 = intval($_POST["nota2"]);
            $nota3 = intval($_POST["nota3"]);

            if ($nota1 > $nota2 && $nota1 >= $nota3 && $nota2 >= $nota3) { //nota1, nota2, nota3
                echo '<h2>Notas informadas em ordem crescente</h2>';
                echo '<p>Avaliações: ' . $nota1 . '</p>';
                echo '<p>Trabalho: ' . $nota2 . '</p>';
                echo '<p>Praticandos: ' . $nota3 . '</p>';
            } else if ($nota1 >= $nota2 && $nota1 >= $nota3 && $nota3 >= $nota2) { //nota1, nota3, nota2
                echo '<h2>Notas informadas em ordem crescente</h2>';
                echo '<p>Avaliações: ' . $nota1 . '</p>';
                echo '<p>Praticandos: ' . $nota3 . '</p>';
                echo '<p>Trabalho: ' . $nota2 . '</p>';
            } else if ($nota2 >= $nota1 && $nota2 >= $nota3 && $nota1 >= $nota3) { //nota2, nota1, nota3
                echo '<h2>Notas informadas em ordem crescente</h2>';
                echo '<p>Trabalho: ' . $nota2 . '</p>';
                echo '<p>Avaliações: ' . $nota1 . '</p>';
                echo '<p>Praticandos: ' . $nota3 . '</p>';
            } else if ($nota2 >= $nota1 && $nota2 >= $nota3 && $nota3 >= $nota1) { //nota2, nota3, nota1
                echo '<h2>Notas informadas em ordem crescente</h2>';
                echo '<p>Trabalho: ' . $nota2 . '</p>';
                echo '<p>Praticandos: ' . $nota3 . '</p>';
                echo '<p>Avaliações: ' . $nota1 . '</p>';
            } else if ($nota3 >= $nota2 && $nota3 >= $nota1 && $nota1 >= $nota2) { //nota3, nota1, nota2
                echo '<h2>Notas informadas em ordem crescente</h2>';
                echo '<p>Praticandos: ' . $nota3 . '</p>';
                echo '<p>Avaliações: ' . $nota1 . '</p>';
                echo '<p>Trabalho: ' . $nota2 . '</p>';
            } else if ($nota3 >= $nota2 && $nota3 >= $nota1 && $nota2 >= $nota1) { //nota3, nota2, nota1
                echo '<h2>Notas informadas em ordem crescente</h2>';
                echo '<p>Praticandos: ' . $nota3 . '</p>';
                echo '<p>Trabalho: ' . $nota2 . '</p>';
                echo '<p>Avaliações: ' . $nota1 . '</p>';
            }
    
            echo '<h3>Média final: ' . (($nota1 * 5) + ($nota2 * 2) + ($nota3 * 3)) / 10 . '</h3>';
        }
        ?>
    </div>
</main>