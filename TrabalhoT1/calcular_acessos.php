<?php

function sobscrever($dados, $arquivo)
{
    $fp = fopen($arquivo, 'w');
    fwrite($fp, $dados);
    fclose($fp);
}

function get_browser_name() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $browser_name = 'Unknown';

    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) {
        $browser_name = 'Opera';
    } elseif (strpos($user_agent, 'Edg')) {
        $browser_name = 'Microsoft Edge';
    } elseif (strpos($user_agent, 'Edge')) {
        $browser_name = 'Microsoft Edge (Legacy)';
    } elseif (strpos($user_agent, 'Chrome')) {
        $browser_name = 'Google Chrome';
    } elseif (strpos($user_agent, 'Safari')) {
        $browser_name = 'Safari';
    } elseif (strpos($user_agent, 'Firefox')) {
        $browser_name = 'Mozilla Firefox';
    } elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) {
        $browser_name = 'Internet Explorer';
    }

    return $browser_name;
}

if (!file_exists('banco/inicio.txt')) {
    sobscrever(0, 'banco/inicio.txt');
}
if (!file_exists('banco/sobre.txt')) {
    sobscrever(0, 'banco/sobre.txt');
}
if (!file_exists('banco/contato.txt')) {
    sobscrever(0, 'banco/contato.txt');
}

$id = $_GET["id"];
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y - H:i:s');
$browser = get_browser_name();

switch ($id) {
    case 1: //Clicar em início
        $inicio = intval(file_get_contents('banco/inicio.txt'));
        $inicio++;
        sobscrever($inicio, 'banco/inicio.txt');
        $log = file_get_contents('banco/log.txt');
        $log .= "<tr><th>$inicio</th><th>inicio.php</th><th>$data</th><th>$browser</th></tr>\n";
        sobscrever($log, 'banco/log.txt');
        break;
    case 2: //Clicar em sobre
        $sobre = intval(file_get_contents('banco/sobre.txt'));
        $sobre++;
        sobscrever($sobre, 'banco/sobre.txt');
        $log = file_get_contents('banco/log.txt');
        $log .= "<tr><th>$sobre</th><th>sobre.php</th><th>$data</th><th>$browser</th></tr>\n";
        sobscrever($log, 'banco/log.txt');
        break;
    case 3: //Clicar em contato
        $contato = intval(file_get_contents('banco/contato.txt'));
        $contato++;
        sobscrever($contato, 'banco/contato.txt');
        $log = file_get_contents('banco/log.txt');
        $log .= "<tr><th>$contato</th><th>contato.php</th><th>$data</th><th>$browser</th></tr>\n";
        sobscrever($log, 'banco/log.txt');
        break;
}