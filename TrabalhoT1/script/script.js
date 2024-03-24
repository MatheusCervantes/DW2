$(document).ready(function () {
    var pagina_atual = window.location.pathname.split("/").pop();
    var link = 'calcular_acessos.php?pagina_atual=' + pagina_atual;
    $.ajax({
        type: 'POST',
        url: 'calcular_acessos.php',
        async: true,
        data: { pagina_atual: pagina_atual }
    });
});