<?php
$host = 'localhost';
$dbname = 'skincare';
$username = 'root'; // Adjust based on your server
$password = '';     // Adjust based on your server

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
?>
