<?php

require_once __DIR__ . '/../vendor/autoload.php';

/** @var array $dbConfig */
$dbConfig = parse_ini_file(__DIR__ . '/../conf/db_conf.ini');

var_dump($dbConfig);

$host       = $dbConfig['host'] . ':' . $dbConfig['port'];
$database   = $dbConfig['database'];
$username   = $dbConfig['username'];
$password   = $dbConfig['password'];

try {
    $db = new PDO('mysql:host='.$host, $username, $password);
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";
    die();
}
