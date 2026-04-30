<?php
// config.php

// Database configuration
$host = 'localhost';
$user = 'username';
$password = 'password';
$db = 'database';

// Establish database connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>