$(document).ready(function () {
    $('#tel').mask('(00)00000-0000');
    $('#cpf').mask('000.000.000-00');
    $('#cep').mask('00.000-000');
});

$('#nome').blur(function () {
    id = $(this).attr('id');
    value = $('#nome').val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookie do campo #nome criado.')
    });
});

$('#tel').blur(function () {
    id = $(this).attr('id');
    value = $('#tel').val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookie do campo #tel criado.')  
    });
});

$('#email').blur(function () {
    id = $(this).attr('id');
    value = $('#email').val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookie do campo #email criado.')  
    });
});

$('#cpf').blur(function () {
    id = $(this).attr('id');
    value = $('#cpf').val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookie do campo #cpf criado.')  
    });
});

$('#date').blur(function () {
    id = $(this).attr('id');
    value = $('#date').val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookie do campo #date criado.')  
    });
});

$('#cep').blur(function () {
    id = $(this).attr('id');
    value = $('#cep').val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        async: true,
        data: { id: id, value: value },
        success: console.log('Cookie do campo #cep criado.')  
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

$('#limpar').click(function () {
    location.reload();
    console.log('Campos limpos.');
});