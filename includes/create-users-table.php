<?php
require_once "../connect.php";

$connection = newConnection('register');

$sql = "CREATE TABLE IF NOT EXISTS users (
    userId INT(8) NOT NULL AUTO_INCREMENT,
    userName VARCHAR(100) NOT NULL,
    userEmail VARCHAR(100) NOT NULL,
    password1 VARCHAR(100) NOT NULL,
    PRIMARY KEY(userId)
)";

/* I also ran this in Workbench so the id number starts from a higher number:
ALTER TABLE users AUTO_INCREMENT=1001; */

$result = $connection->query($sql);

if ($result) {
    echo "Table successfully created";
} else {
    echo "Failed to create the User Table: " . $connection->error;
    echo "SQL Query: " . $sql;
}

$connection->close();
?>