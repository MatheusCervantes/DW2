<?php
require '../include/header.php';
?>

<h1 class="order-1 margem">Exercício 3 - Cálculo de jurus de um valor</h1>
</header>

</div>

<main>
    <div class="d-flex justify-content-center m-4">
        <div class="border border-secondary-subtle img p-2 d-flex justify-content-center flex-wrap me-2">
            <div class="bg-secondary-subtle">
                <h5 class="text-center m-3">Samsung Galaxy S24</h5>
            </div>
            <img class="card-img-top border border-secondary-subtle" src="https://t.ctcdn.com.br/MqL_QE9r5kCT2eTZcPDO5wzaxjU=/fit-in/600x600/filters:fill(transparent):watermark(wm/prd.png,-32p,center,1,none,15)/i847825.png">
            <h2 class="text-center m-3">R$ 5.399,00</h2>
            <p class="text-center mt-3">Android 14 Exynos 2400 - 8GB/256BG AMOLED Dinâmico 2X</p>
            <a href="index.php?valor=5399" class="btn btn-outline-primary mt-3">Formas de Pagamento</a>
        </div>

        <div class="border border-secondary-subtle img p-2 d-flex justify-content-center flex-wrap me-2">
            <div class="bg-secondary-subtle">
                <h5 class="text-center m-3">Apple iPhone 15</h5>
            </div>
            <img class="card-img-top border border-secondary-subtle" src="https://t.ctcdn.com.br/9NtCs8OSy8MLIxzY5FUHUYnygN0=/fit-in/600x600/filters:fill(transparent):watermark(wm/prd.png,-32p,center,1,none,15)/i798965.png">
            <h2 class="text-center m-3">R$ 6.799,00</h2>
            <p class="text-center mt-3">iOS 17 Chip A16 Bionic - 6GB/256BG A Dynamic Island chega ao iPhone 15 Conectividade USB-C</p>
            <a href="index.php?valor=6799" class="btn btn-outline-primary mt-3">Formas de Pagamento</a>
        </div>

        <div class="border border-secondary-subtle img p-2 d-flex justify-content-center flex-wrap me-2">
            <div class="bg-secondary-subtle">
                <h5 class="text-center m-3">Xiaomi 13T</h5>
            </div>
            <img class="card-img-top border border-secondary-subtle" src="https://t.ctcdn.com.br/IgPX0U1BIy3GdXWbSjqShP9JDPk=/fit-in/600x600/filters:fill(transparent):watermark(wm/prd.png,-32p,center,1,none,15)/i804819.png">
            <h2 class="text-center m-3">R$ 5.199,00</h2>
            <p class="text-center mt-3">Android 13 MIUI14 Dimensity 8200 Ultra MediaTek - 12GB/256BG Carregamento de 67W, 0% a 100% em 42 minutos</p>
            <a href="index.php?valor=5199" class="btn btn-outline-primary mt-3">Formas de Pagamento</a>
        </div>
    </div>

    <div class="container">
        <?php
        if (isset($_GET["valor"])) {
            $valor = $_GET["valor"];

            echo '<p> O preço informado é <b>R$ ' . $valor . '</b> <span class="text-success"><b>(5% de desconto)</b></span>';
            echo "<p>As condições de pagamento são: </p>";

            echo '<ul>
            <li>à vista: <b> R$' . $valor * 0.95 . ',00</b></li>
            <li>parcelado em 3x de <b> R$' . round(($valor / 3), 2) . ',00</b> totalizando <b>R$ ' . $valor . ',00</b> </li>
            <li>parcelado em 5x de <b> R$' . round((($valor * 1.05) / 5), 2) . ',00</b> totalizando <b>R$ ' . $valor * 1.05 . ',00</b> <span class="text-danger"><b>(5% de acréscimo)</b></span></li>
            <li>parcelado em 12x de <b> R$' . round((($valor * 1.1) / 12), 2) . ',00</b> totalizando <b>R$ ' . $valor * 1.1 . ',00</b> <span class="text-danger"><b>(10% de acréscimo)</b></span></li>
            <li>parcelado em 18x de <b> R$' . round((($valor * 1.15) / 18), 2) . ',00</b> totalizando <b>R$ ' . $valor * 1.15 . ',00</b> <span class="text-danger"><b>(15% de acréscimo)</b></span></li>
            </ul>';
        }
        ?>
    </div>

</main>