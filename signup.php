<?php
include('server.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
   </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo" src="images/logo1.png" width="120px" height="auto" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signin.php">SIGN IN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">SIGN UP</a>
              </li>
                        
              <li class="nav-item">
                <a class="nav-link" href="signin.php">DOWNLOAD E-BOOKS</a>
              </li>
            </ul>
  
          </div>
        </div>
      </nav>
    <div class="header">
      <h2>Registration</h2>
    </div>
    <form  method="POST" action="signup.php">
        <?php include('error.php'); ?>
     <div class="input-group">
         <label for="">Username</label>
         <input type="text" name="username" value="<?php echo $username; ?>"> 
     </div>
     <div class="input-group">
         <label for="">Email</label>
         <input type="text" name="email" value="<?php echo $email; ?>">
     </div>
     <div class="input-group">
         <label for="">Password</label>
         <input type="password" name="password_1"> 
     </div>
     <div class="input-group">
         <label for="">Confirm Password</label>
         <input type="password" name="password_2"> 
     </div>
     <div class="input-group">
        <button type="submit" name="register" class="btn">Register</button>
     </div>
     <p>
         Already have an acount? <a href="signin.php">Sign in</a>
     </p>
    </form>
</body>
</html>