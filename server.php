<?php
session_start();
require 'connect.php';
$username="";
$email="";
$errors=array();

// // <!-- db connection -->
// $db = mysqli_connect('localhost', 'root', '', 'register');

// if the log in button is clicked
if (isset($_POST['register'])){
$username=$db -> real_escape_string($_POST['username']);
$email= $db -> real_escape_string($_POST['email']);
$password_1=$db -> real_escape_string($_POST['password_1']);
$password_2=$db -> real_escape_string($_POST['password_2']);


// make sure inputs are filled
if (empty($username)){
    array_push($errors,"Username is required");
}
if (empty($email)){
    array_push($errors,"Email is required");
}
if (empty($password_1)){
    array_push($errors,"Password is required");
}
if ($password_1 != $password_2){
    array_push($errors,"Password should match");
}


// if there are not errors save in db
if(count($errors)==0){
$password = md5($password_1);
$sql = "INSERT INTO users (userName, Email, password1)
        VALUES ('$username','$email','$password')";
        mysqli_query($db,$sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="You are successfully signed in";
        header('Location: signin.php');
}
}

// log user in from login page

if (isset($_POST['login'])){
    $username=$db -> real_escape_string($_POST['username']);
    $password=$db -> real_escape_string($_POST['password']);


    // field should be filled
    if (empty($username)){
        array_push($errors,"Username is required");
    }
    if (empty($password)){
        array_push($errors,"Password is required");
    }
    if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE userName='$username' AND password1='$password'";
        $result = mysqli_query($db,$query);

        // log user in
        if(mysqli_num_rows($result)==1){
          $_SESSION['username']=$username;
        $_SESSION['success']="You are successfully signed in";
        header('Location: download.php');   
        }else{
            array_push($errors,"wrong user name or password"); 
            
        }
    }
}





if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:signin.php');
}

?>