<?php

$host = 'localhost';
$database = 'i20_shop';
$user = 'root';
$dbpassword = 'root';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $user, $dbpassword);
} catch(PDOException $e) {
    echo $e->getMessage();
}