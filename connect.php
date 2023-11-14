<?php

function newConnection($db = 'register') {
    $server = '127.0.0.1:3306';
    $user = 'root';
    $password = '';

    $connection = new mysqli($server, $user, $password, $db);

    if($connection->connect_error) {
        die('Error: ' . $connection->connect_error);
    }
    return $connection;
}



/* function prepare_string($db, $string) {
		$string = mysqli_real_escape_string($db, trim($string));
		return $string;
	}

	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'register');

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		OR die('Could not connect to MySQL: ' . mysqli_connect_error());
	mysqli_set_charset($db, 'utf8'); */


  ?>  