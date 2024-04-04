$('#titulo, #alinhamento_pag, #corpo, #imagem, #mostrarimagem, #cor').blur(function () {
    var id = $(this).attr('id');
    var value = $(this).val();
    $.ajax({
        type: 'GET',
        url: 'ajax.php',
        async: true,
        data: { value: value },
        success: function() {
            console.log('Cookie do campo #' + id + ' criado.');
        }
    });
});