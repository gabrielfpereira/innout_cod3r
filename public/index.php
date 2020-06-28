<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) // não considera as partes do paramentos na URL
);
// Fiz alteração no arquivo config do apache document root... Lembrar de DESFAZER
if ($uri === '/' || $uri === '' || $uri === '/index') {
    $uri = 'login.php';
}
require_once(CONTROLLER_PATH . "/{$uri}");
