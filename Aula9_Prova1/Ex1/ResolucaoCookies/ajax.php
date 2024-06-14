<?php
$id = $_POST['id'];
$value = $_POST['value'];

if ($id ==  'limparcookies') {
    setcookie('cookieTITULO', $value, time() + 60 * 60);
    setcookie('cookieALINHAMENTO', $value, time() + 60 * 60);
    setcookie('cookieCORPO', $value, time() + 60 * 60);
    setcookie('cookieIMAGEM', $value, time() + 60 * 60);
    setcookie('cookieMOSTRARIMG', $value, time() + 60 * 60);
    setcookie('cookieCOR', $value, time() + 60 * 60);
}
