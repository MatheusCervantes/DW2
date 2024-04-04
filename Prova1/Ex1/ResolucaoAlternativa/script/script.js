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