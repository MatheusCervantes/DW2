$(document).ready(function () {
    $('#tel').mask('(00)00000-0000');
    $('#cpf').mask('000.000.000-00');
    $('#cep').mask('00.000-000');
});

$('#nome, #tel, #email, #cpf, #date, #cep').blur(function () {
    var id = $(this).attr('id');
    var value = $(this).val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: function() {
            console.log('Cookie do campo #' + id + ' criado.');
        }
    });
});

$('#limpar').click(function () {
    id = $(this).attr('id');
    value = '';
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookies apagados.')
    });
    location.reload();
});
