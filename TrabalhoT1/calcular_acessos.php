<?php

//Código utilizando arquivo JSON
function getid($pagina)
{
    $dados = json_decode(file_get_contents('banco/banco.json'), true);
    foreach ($dados as $entrada) {
        if ($entrada['pagina'] == $pagina) {
            $id = $entrada['id'];
        }
    }
    $id++;
    return $id;
}

function get_browser_name()
{
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

date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y - H:i:s');
$browser = get_browser_name();
$pagina_atual = $_POST['pagina_atual'];

if (!file_exists('banco/banco.json')) {
    touch('banco/banco.json');
}

switch ($pagina_atual) {
    case 'inicio.php':
        $dados = json_decode(file_get_contents('banco/banco.json'), true);
        $dados[] = array("id" => getid('inicio.php'), "pagina" => "inicio.php", "data_hora" => $data, "navegador" => $browser);
        file_put_contents('banco/banco.json', json_encode($dados, JSON_PRETTY_PRINT));
        break;
    case 'sobre.php':
        $dados = json_decode(file_get_contents('banco/banco.json'), true);
        $dados[] = array("id" => getid('sobre.php'), "pagina" => "sobre.php", "data_hora" => $data, "navegador" => $browser);
        file_put_contents('banco/banco.json', json_encode($dados, JSON_PRETTY_PRINT));
        break;
    case 'contato.php':
        $dados = json_decode(file_get_contents('banco/banco.json'), true);
        $dados[] = array("id" => getid('contato.php'), "pagina" => "contato.php", "data_hora" => $data, "navegador" => $browser);
        file_put_contents('banco/banco.json', json_encode($dados, JSON_PRETTY_PRINT));
        break;
}


/*Código com arquivo txt

function escrever_arquivo($dados, $arquivo)
{
    $fp = fopen($arquivo, 'w');
    fwrite($fp, $dados);
    fclose($fp);
}

function contador($arquivo)
{
    $contador = intval(file_get_contents($arquivo));
    $contador++;
    escrever_arquivo($contador, $arquivo);
    return $contador;
}

function get_browser_name()
{
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
    escrever_arquivo(0, 'banco/inicio.txt');
}
if (!file_exists('banco/sobre.txt')) {
    escrever_arquivo(0, 'banco/sobre.txt');
}
if (!file_exists('banco/contato.txt')) {
    escrever_arquivo(0, 'banco/contato.txt');
}
if (!file_exists('banco/log.txt')) {
    escrever_arquivo('', 'banco/log.txt');
}

date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y - H:i:s');
$browser = get_browser_name();
$pagina_atual = $_POST['pagina_atual'];

switch ($pagina_atual) {
    case 'inicio.php':
        $contador = contador('banco/inicio.txt');
        $log = file_get_contents('banco/log.txt');
        $log .= "<tr><th>$contador</th><th>inicio.php</th><th>$data</th><th>$browser</th></tr>\n";
        escrever_arquivo($log, 'banco/log.txt');
        break;
    case 'sobre.php':
        $contador = contador('banco/sobre.txt');
        $log = file_get_contents('banco/log.txt');
        $log .= "<tr><th>$contador</th><th>sobre.php</th><th>$data</th><th>$browser</th></tr>\n";
        escrever_arquivo($log, 'banco/log.txt');
        break;
    case 'contato.php':
        $contador = contador('banco/contato.txt');
        $log = file_get_contents('banco/log.txt');
        $log .= "<tr><th>$contador</th><th>contato.php</th><th>$data</th><th>$browser</th></tr>\n";
        escrever_arquivo($log, 'banco/log.txt');
        break;
}

*/