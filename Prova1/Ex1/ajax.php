<?php
$id = $_POST['id'];
$value = $_POST['value'];

switch ($id) {
    case 'titulo':
        setcookie('cookieTITULO', $value, time() + 60 * 60);
        break;
    case 'alinhamento_pag':
        setcookie('cookieALINHAMENTO', $value, time() + 60 * 60);
        break;
    case 'corpo':
        setcookie('cookieCORPO', $value, time() + 60 * 60);
        break;
    case 'imagem':
        setcookie('cookieIMAGEM', $value, time() + 60 * 60);
        break;
    case 'mostrarimagem':
        setcookie('cookieMOSTRARIMG', $value, time() + 60 * 60);
        break;
    case 'cor':
        setcookie('cookieCOR', $value, time() + 60 * 60);
        break;
    case 'limparcookies':
        setcookie('cookieTITULO', $value, time() + 60 * 60);
        setcookie('cookieALINHAMENTO', $value, time() + 60 * 60);
        setcookie('cookieCORPO', $value, time() + 60 * 60);
        setcookie('cookieIMAGEM', $value, time() + 60 * 60);
        setcookie('cookieMOSTRARIMG', $value, time() + 60 * 60);
        setcookie('cookieCOR', $value, time() + 60 * 60);
        break;
}