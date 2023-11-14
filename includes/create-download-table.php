<?php
require_once "../connect.php";

$sql = "CREATE TABLE IF NOT EXISTS download (
    download_id INT(6) AUTO_INCREMENT,
    book_id INT(8) UNSIGNED NOT NULL,
    userId INT(8) NOT NULL,
    FOREIGN KEY (book_id) REFERENCES booklist(book_id),
    FOREIGN KEY (userId) REFERENCES users(userId),
    PRIMARY KEY(download_id)
)";

/* I also ran this in Workbench so the id number starts from a higher number:
ALTER TABLE download AUTO_INCREMENT=101; */

$connection = newConnection();
$result = $connection->query($sql);

if($result) {
    echo "Table successfuly created";
} else {
    echo "Failed to create the User Table" . $connection->error;
}

$connection->close();

  ?>