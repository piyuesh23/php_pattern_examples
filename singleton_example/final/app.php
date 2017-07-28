<?php

use SingletonExample\Database;

$db1 = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

var_dump($db1);
var_dump($db2);
var_dump($db3);
