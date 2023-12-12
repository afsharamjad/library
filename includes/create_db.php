<?php

function newConnection($db = 'register') {
    $server = 'localhost';
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

?>
