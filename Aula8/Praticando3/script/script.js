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

$('#limpar').click(function () {
    $('#nome, #tel, #email, #cpf, #date, #cep').val('');
});

function getCookie(nome) {
    var name = nome + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
    for(var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) === 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return "";
}

function mostrarDadosDoCookie(nomeDoCookie) {
    var cookieValue = getCookie(nomeDoCookie);
    if (cookieValue !== "") {
        console.log("Valor do cookie '" + nomeDoCookie + "':", cookieValue);
    } 
}

mostrarDadosDoCookie('cookieNOME');
mostrarDadosDoCookie('cookieTEL');
mostrarDadosDoCookie('cookieEMAIL');
mostrarDadosDoCookie('cookieCPF');
mostrarDadosDoCookie('cookieDATE');
mostrarDadosDoCookie('cookieCEP');