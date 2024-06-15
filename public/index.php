<?php
// Require composer autoloader
require __DIR__ . '/../vendor/autoload.php';
// required app loaders and globals
require __DIR__ . '/../src/requires.php';

use App\api\Ai;
use Bramus\Router\Router;
use \App\api\QuotesApi;
use App\Quotes;
use App\Authenticator;

// Create Router instance
$router = new Router();

$router->before('GET|POST|PUT|DELETE|HEAD|PATCH|CONNECT|OPTIONS|TRACE', '/.*', function () {
  // auth token
  if (empty($_GET['token'])) {
    http_response_code(401);
    exit();
  }

  if (!Authenticator::authenticate($_GET['token'])) {
    http_response_code(401);
    exit();
  }
});

$router->get('/random-html', function () {
  echo Ai::generateRandomHTML();
});

$router->get('/', function () {
  require __DIR__ . '/../src/views/index.php';
});

$router->get('/foo', function () {
  require __DIR__ . '/../src/views/index.php';
});

$router->get('/api/random-quote', function () {
  QuotesApi::randomJsonQuote(new Quotes());
});

$router->set404(function () {
  header('Location: /');
});

$router->run();
