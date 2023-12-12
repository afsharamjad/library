<?php

function newConnection($db = 'register') {
    $server = 'localhost';  // Use 'localhost' instead of '127.0.0.1:3306'
    $user = 'root';
    $password = '';
    
    $connection = new mysqli($server, $user, $password);

    if ($connection->connect_error) {
        die('Error: ' . $connection->connect_error);
    }

    // Create the database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS $db";
    if (!$connection->query($sql)) {
        die('Error creating database: ' . $connection->error);
    }

    // Select the database
    $connection->select_db($db);

    return $connection;
}
// Establish the database connection and store it in $db variable
$db = newConnection();

// Ensure that the connection is successful
if (!$db) {
    die('Database connection error');
}


?>
