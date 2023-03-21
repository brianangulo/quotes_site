<?php
// this file should be required in all other scripts to assure that common globals are accessible
// should be loaded after autoload

use Dotenv\Dotenv;

const INCLUDES_DIR = __DIR__ . '/../includes/';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
