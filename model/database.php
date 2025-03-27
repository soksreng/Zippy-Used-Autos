<?php
// Connect to the database
$dsn = 'mysql:host=localhost;dbname=zippyusedautos';
$username = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Database Error: " . $e->getMessage());
}