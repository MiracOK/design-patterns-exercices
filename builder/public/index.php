<?php
require('../vendor/autoload.php');

use App\MySQLQueryBuilder;
use App\LiteralBuilder;

$mysql = new MySQLQueryBuilder();

$query1 = $mysql
    ->select(['id', 'name', 'email'])
    ->from(['users'])
    ->where('age', '>', 18)
    ->where('active', '=', 1)
    ->build();

echo "MySQL query 1 :\n" . $query1 . "\n\n";

$mysql2 = new MySQLQueryBuilder();
$query2 = $mysql2
    ->select(['title', 'price'])
    ->from(['products', 'categories'])
    ->where('category_id', '=', 5)
    ->build();

echo "MySQL query 2 :\n" . $query2 . "\n\n";

$literal = new LiteralBuilder();

$sentence = $literal
    ->select(['id', 'name', 'email'])
    ->from(['users'])
    ->where('age', '>', 18)
    ->build();

echo "Literal builder :\n" . $sentence . "\n";
