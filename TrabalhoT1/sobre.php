<?php
require 'include/header.php';
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="imagens/sobre.png" alt="Logo" width="40" height="40" class="d-inline-block align-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <div class="nav-link active inicio">Sobre</div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logs.php">Logs de Acesso</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<main>
    <div class="container border border-dark mt-5 mb-5 p-4">
        <div class="d-flex justify-content-center">
            <div class="titulo p-4 mb-3">
                <h1>Sobre</h1>
            </div>
        </div>
        <div>
            <img src="imagens/sobreimg.png" alt="sobre" class="img">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident sed accusamus nesciunt inventore eos quis temporibus quod natus nulla quidem? Eligendi ducimus amet exercitationem dignissimos, dolor in nesciunt enim veniam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat hic a provident quod. Iure nesciunt illum corporis id hic voluptatem quod dicta obcaecati. Recusandae asperiores ipsa fugit, rerum velit beatae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, voluptas? Cumque tempore expedita quos exercitationem tempora sequi vel ducimus, culpa ut nostrum? Ullam neque illum expedita possimus rerum dicta! Voluptate.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit molestiae blanditiis laudantium nihil cupiditate iusto ipsum eveniet ex voluptatibus in id cumque aspernatur, exercitationem asperiores accusantium aut. Ad, consequatur pariatur? .Provident sed accusamus nesciunt inventore eos quis temporibus quod natus nulla quidem? Eligendi ducimus amet exercitationem dignissimos, dolor in nesciunt enim veniam.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident sed accusamus nesciunt inventore eos quis temporibus quod natus nulla quidem? Eligendi ducimus amet exercitationem dignissimos, dolor in nesciunt enim veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi alias dolores non vitae deserunt aliquid consequatur! Autem hic, quia nemo fugit, laborum veniam harum ratione accusantium quae dolorem eos corporis!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quas expedita a, ipsa nisi alias. Voluptatum consequuntur corrupti, aperiam unde obcaecati voluptas, odio autem vel delectus quis voluptates nihil tempore? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident sed accusamus nesciunt inventore eos quis temporibus quod natus nulla quidem? Eligendi ducimus amet exercitationem dignissimos, dolor in nesciunt enim veniam.</p>
        </div>
    </div>
    <div class="preencher"></div>
</main>

<?php
require 'include/footer.php';
?>