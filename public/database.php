<?php

require_once __DIR__ . '/../vendor/autoload.php';

/** @var array $dbConfig */
$dbConfig = parse_ini_file(__DIR__ . '/../conf/db_conf.ini');

$host       = 'host=' . $dbConfig['host'];
$database   = 'dbname=' . $dbConfig['database'];
$username   = $dbConfig['username'];
$password   = $dbConfig['password'];

$dsn = 'mysql:' . $database . ';' . $host;

try {
    $db = new PDO($dsn, $username, $password);
    print "DB Connection: Success!<br/>";
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";
    die();
}
