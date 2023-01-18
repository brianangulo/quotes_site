<?php
require __DIR__ . '/../../../vendor/autoload.php';
use App\Quotes;

header('Content-Type: application/json');

echo Quotes::getRandomQuotableJson();
