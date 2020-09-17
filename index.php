<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

route();

function route() {
    $path = trim($_SERVER['REQUEST_URI'], '/');
    $path = filter_var($path, FILTER_SANITIZE_URL);
    $path = explode('/', $path);

    $path = isset($path[2]) ? $path[2] : '';

    switch ($path) {
        case '':
            require __DIR__ . '/web.php';
            break;
        case 'api':
            require __DIR__ . '/api.php';
            break;
        default:
            http_response_code(404);
            echo '404 page not found';
            break;
    }
}