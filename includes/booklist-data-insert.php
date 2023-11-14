<?php
    $server = '127.0.0.1:3306';
    $user = 'root';
    $password = '';
    $db = 'register';

    $connection = new mysqli($server, $user, $password, $db);

$sql = "INSERT INTO booklist (book_Name, book_pages, book_image) VALUES ('The Full Stack Development', '450 pages', 'images/book1.jpg'),
('Web Development, React', '567 pages', 'images/book2.jpg'),
('Full Stack Web Developer Academy For Beginners', '798 pages', 'images/book3.png'),
('Web Development with Node and Express', '675 pages', 'images/book4.jpg'),
('Responsive Web Design with HTML5 and CSS', '543 pages', 'images/book5.png'),
('HTML, CSS, JavaScript', '654 pages', 'images/book6.jpg'),
('Beautiful Web Design', '435 pages', 'images/book7.jpg'),
('Learn Web Development with Python', '564 pages', 'images/book8.jpg') ;";

mysqli_query($connection,$sql);