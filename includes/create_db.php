<?php
require_once "../connect.php";

$connection = newConnection(null);
$sql = 'CREATE DATABASE IF NOT EXISTS register';

$result = $connection->query($sql);

if($result) {
    echo "Connection successfuly created";
} else {
    echo "Failed to create a connection" . $connection->error;
}

$connection->close();