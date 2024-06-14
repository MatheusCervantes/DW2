<?php
$id = $_POST['id'];
$value = $_POST['value'];

switch ($id) {
    case 'nome':
        setcookie('cookieNOME', $value, time() + 60 * 60);
        break;
    case 'tel':
        setcookie('cookieTEL', $value, time() + 60 * 60);
        break;
    case 'email':
        setcookie('cookieEMAIL', $value, time() + 60 * 60);
        break;
    case 'cpf':
        setcookie('cookieCPF', $value, time() + 60 * 60);
        break;
    case 'date':
        setcookie('cookieDATE', $value, time() + 60 * 60);
        break;
    case 'cep':
        setcookie('cookieCEP', $value, time() + 60 * 60);
        break;
    case 'limparcookies':
        setcookie('cookieNOME', $value, time() + 60 * 60);
        setcookie('cookieTEL', $value, time() + 60 * 60);
        setcookie('cookieEMAIL', $value, time() + 60 * 60);
        setcookie('cookieCPF', $value, time() + 60 * 60);
        setcookie('cookieDATE', $value, time() + 60 * 60);
        setcookie('cookieCEP', $value, time() + 60 * 60);
        break;
}
