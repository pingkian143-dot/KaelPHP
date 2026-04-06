<?php
$host = 'localhost';
$db = 'mypagedb';
$user = 'root';
$pass = '';

try{
    // Fixed: Use double quotes to allow variable interpolation
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", 
    $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: ". $e->getMessage());
}
?>