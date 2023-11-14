<?php 
require_once "../connect.php";

$sql = "CREATE TABLE IF NOT EXISTS booklist (
    book_id INT(8) UNSIGNED AUTO_INCREMENT NOT NULL,
    book_Name VARCHAR(100) NOT NULL,
    book_pages VARCHAR(100) NOT NULL,
    book_image VARCHAR(100) NOT NULL,
    PRIMARY KEY(book_id)
)";

$connection = newConnection();
$result = $connection->query($sql);

if($result) {
    echo "Table successfuly created";
} else {
    echo "Failed to create the Book List Table" . $connection->error;
}

$connection->close();

/* -- Table structure for table `booklist`
--

$db= "CREATE TABLE IF NOT EXISTS booklist (
  `book_id` int(8) UNSIGNED AUTO_INCREMENT NOT NULL,
  `book_Name` varchar(100) NOT NULL,
  `book_pages` varchar(100) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  PRIMARY KEY(book_id)
)";

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`book_id`, `book_Name`, `book_pages`, `book_image`) VALUES
(1, 'The Full Stack Development', '450 pages', 'images/book1.jpg'),
(2, 'Web Development, React', '567 pages', 'images/book2.jpg'),
(3, 'Full Stack Web Developer Academy For Beginners', '798 pages', 'images/book3.png'),
(4, 'Web Development with Node and Express', '675 pages', 'images/book4.jpg'),
(5, 'Responsive Web Design with HTML5 and CSS', '543 pages', 'images/book5.png'),
(6, 'HTML, CSS, JavaScript', '654 pages', 'images/book6.jpg'),
(7, 'Beautiful Web Design', '435 pages', 'images/book7.jpg'),
(8, 'Learn Web Development with Python', '564 pages', 'images/book8.jpg') */

?>