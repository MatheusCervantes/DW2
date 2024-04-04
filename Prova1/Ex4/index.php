<?php
require '../include/header.php';
?>

<h1 class="order-1 margem">Exercício 4 - Gerador de dados (Composer)</h1>
</header>

</div>

<main>
    <div class="d-flex justify-content-center  flex-wrap">
        <div class="bg-primary-subtle quadrado m-4 text-center">
            <a href="index.php?num=3">
                <h1>3</h1>
            </a>
        </div>
        <div class="bg-primary-subtle quadrado m-4 text-center">
            <a href="index.php?num=4">
                <h1>4</h1>
            </a>
        </div>
        <div class="bg-primary-subtle quadrado m-4 text-center">
            <a href="index.php?num=5">
                <h1>5</h1>
            </a>
        </div>
        <div class="bg-primary-subtle quadrado m-4 text-center">
            <a href="index.php?num=8">
                <h1>8</h1>
            </a>
        </div>
    </div>

    <?php
    require 'vendor/autoload.php';


    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        $faker = Faker\Factory::create();

        echo '<div class="container">';
        echo '<table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOME</th>
                                    <th scope="col">E-MAIL</th>
                                </tr>
                            </thead>
                            <tbody>';
        for ($i = 0; $i < $num; $i++) {
            echo '<tr><th>' . $i + 1 . '</th> <th>' . $faker->name() . '</th> <th>' . $faker->email()  . '</th></tr>';
        }
        echo '</tbody></table></div>';
    }
    ?>

</main>