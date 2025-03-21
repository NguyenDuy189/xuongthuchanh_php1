<?php
$host = 'localhost';
$db_name = 'xuongphp1_oop';
$db_user = 'root';
$db_pass = '';
$db_charset = 'utf8';
$base_url = 'http://localhost/PHP1/xuongphp1_oop/';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=$db_charset", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}