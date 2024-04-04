/*$('#titulo, #alinhamento_pag, #corpo, #imagem, #mostrarimagem, #cor').blur(function () {
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
});*/

$('#limparcookies').click(function () {
    id = $(this).attr('id');
    value = '';
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookies apagados.')
    });
});