<?php
session_start();
require 'connect.php';

$username = "";
$email = "";
$errors = array();

// Establish the database connection using the newConnection function
$db = newConnection();

// if the register button is clicked
if (isset($_POST['register'])) {
    $username = $db->real_escape_string($_POST['username']);
    $email = $db->real_escape_string($_POST['email']);
    $password_1 = $db->real_escape_string($_POST['password_1']);
    $password_2 = $db->real_escape_string($_POST['password_2']);

    // Check if passwords match
    if ($password_1 !== $password_2) {
        array_push($errors, "Passwords should match");
    }

    // make sure inputs are filled
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    // if there are no errors, save in the database
    if (count($errors) == 0) {
        $hashed_password = password_hash($password_1, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (userName, userEmail, password1) VALUES ('$username', '$email', '$hashed_password')";
        
        // Print out the query for debugging
        echo "Query: $sql<br>";
    
        if (mysqli_query($db, $sql)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are successfully signed in";
            header('Location: signin.php');
        } else {
            // Print out the error message for debugging
            echo "Query failed: " . mysqli_error($db);
        }
    }
}
// log user in from login page
if (isset($_POST['login'])) {
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']);

    // fields should be filled
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        // Check if the user exists
        $user_check_query = "SELECT * FROM users WHERE userName='$username' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);

        // Check if the query was successful
        if ($result) {
            // Check if there are any rows returned
            if (mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_assoc($result);

                // Verify the password
                if (password_verify($password, $user['password1'])) {
                    // Passwords match
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are successfully signed in";
                    header('Location: download.php');
                    exit(); // Add exit to prevent further execution
                } else {
                    // Wrong password
                    array_push($errors, "Wrong username or password");
                    echo "Wrong password: " . $password;
                }
            } else {
                // No user found with the provided username
                array_push($errors, "User not found");
                echo "No user found: " . $username;
            }
        } else {
            // Query failed
            die('Query failed: ' . mysqli_error($db));
        }
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: signin.php');
    exit(); // Add exit to prevent further execution
}

// Close the database connection when done
$db->close();
?>
