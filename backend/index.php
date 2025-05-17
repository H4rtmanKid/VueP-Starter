<?php

$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

switch ($path) {
    case '/api':
    case '/api/':
    case '/api/index.php':
        echo "API endpoint is not implemented yet.";
        break;

    default:
        http_response_code(404);
        include __DIR__ . '/errors/404.html';
        exit;
}
