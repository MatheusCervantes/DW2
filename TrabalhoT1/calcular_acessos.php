<?php

function sobscrever($dados, $arquivo)
{
    $fp = fopen($arquivo, 'w');
    fwrite($fp, $dados);
    fclose($fp);
}

function get_browser_name() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser_names = array(
        'Opera',
        'Edge',
        'Chrome',
        'Safari',
        'Firefox',
        'MSIE',
        'Trident'
    );
    foreach ($browser_names as $browser_name) {
        if (strpos($user_agent, $browser_name) !== false) {
            return $browser_name;
        }
    }
    return 'Unknown';
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

$total = intval(file_get_contents('banco/total.txt'));
$total = intval(file_get_contents('banco/inicio.txt')) + intval(file_get_contents('banco/sobre.txt')) + intval(file_get_contents('banco/contato.txt'));
sobscrever($total, 'banco/total.txt');