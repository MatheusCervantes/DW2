$(document).ready(function () {
    var nomeArquivo = window.location.pathname.split('/').pop();
    if (nomeArquivo === 'inicio.php') {
        $.ajax({
            type: 'GET',
            url: 'calcular_acessos.php?id=1',
            async: true,
        });
    }
});

$(document).ready(function () {
    var nomeArquivo = window.location.pathname.split('/').pop();
    if (nomeArquivo === 'sobre.php') {
        $.ajax({
            type: 'GET',
            url: 'calcular_acessos.php?id=2',
            async: true,
        });
    }
});

$(document).ready(function () {
    var nomeArquivo = window.location.pathname.split('/').pop();
    if (nomeArquivo === 'contato.php') {
        $.ajax({
            type: 'GET',
            url: 'calcular_acessos.php?id=3',
            async: true,
        });
    }
});