<?php
require('../vendor/autoload.php');

use App\Config;

$config1 = Config::getInstance();

$db = $config1->get('db');
echo "DB host : {$db['host']}\n";
echo "API key : {$config1->get('apiKey')}\n";
echo "Debug   : " . ($config1->get('debug') ? 'true' : 'false') . "\n\n";

$config2 = Config::getInstance();

var_dump($config1 === $config2); 
