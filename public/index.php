<?php
// Require composer autoloader
require __DIR__ . '/../vendor/autoload.php';
// required app loaders and globals
require __DIR__ . '/../src/requires.php';

use Bramus\Router\Router;
use \App\api\Api;

// Create Router instance
$router = new Router();

$router->get('/', function () {
    require __DIR__ . '/../src/views/index.php';
});

$router->get('/api/random-quote', [Api::class, 'randomQuote']);

$router->run();
