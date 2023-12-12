<?php
require_once "../connect.php";

$connection = newConnection('register');

$sql = "CREATE TABLE IF NOT EXISTS booklist (
    book_id INT(8) UNSIGNED AUTO_INCREMENT NOT NULL,
    book_Name VARCHAR(100) NOT NULL,
    book_pages VARCHAR(100) NOT NULL,
    book_image VARCHAR(100) NOT NULL,
    PRIMARY KEY(book_id)
)";

$result = $connection->query($sql);

if ($result) {
    echo "Table successfully created";
} else {
    echo "Failed to create the Book List Table: " . $connection->error;
}

$connection->close();

$sql = "INSERT INTO `booklist` (`book_id`, `book_Name`, `book_pages`, `book_image`) VALUES
(1, 'The Full Stack Development', '450 pages', 'images/book1.jpg'),
(2, 'Web Development, React', '567 pages', 'images/book2.jpg'),
(3, 'The Dead House', '798 pages', 'images/book3.jpg'),
(4, '1948', '675 pages', 'images/book4.jpg'),
(5, 'Fairy Tale', '543 pages', 'images/book5.jpg'),
(6, 'HTML, CSS, JavaScript', '654 pages', 'images/book6.jpg'),
(7, 'Song Of Achilles ', '435 pages', 'images/book7.jpg'),
(8, 'Harry Potter', '564 pages', 'images/book8.jpg')"
?>

