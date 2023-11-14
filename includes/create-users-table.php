<?php
require_once "../connect.php";

$sql = "CREATE TABLE IF NOT EXISTS users (
    userId INT(8) NOT NULL AUTO_INCREMENT,
    userName VARCHAR(100) NOT NULL,
    userEmail VARCHAR(100) NOT NULL,
    password1 VARCHAR(100) NOT NULL,
    PRIMARY KEY(userId)
)";

/* I also ran this in Workbench so the id number starts from a higher number:
ALTER TABLE users AUTO_INCREMENT=1001; */

$connection = newConnection();
$result = $connection->query($sql);

if($result) {
    echo "Table successfuly created";
} else {
    echo "Failed to create the User Table" . $connection->error;
}

$connection->close();


/* 

CREATE TABLE `users` (
    `user_id` int(11) NOT NULL,
    `userName` varchar(100) NOT NULL,
    `Email` varchar(40) NOT NULL,
    `password1` varchar(40) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  
  uniqueidentifier NOT NULL DEFAULT NEWID(),
  -- */
  ?>