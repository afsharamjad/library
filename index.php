<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
   </script>
    <link rel="stylesheet" href="style.css">
    
</head>

</style>
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
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
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
    <div class="wrapper">
     <div class="home-image">
         <img src="images/hero.png" alt="">
     </div>
     <div class="home-content">
         <h1>"Read and Grow" Library</h1>
         <a href="signin.php">DOWNLOAD HERE</a>

        

     </div>
</div>

  <!-- footer -->
  <footer class="container">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase footer-content-h ft-nav-title">Subscribe and Save</h5>
            <p class="footer-content-b">Subscribe to our Newsletter and receive <br> offers difrectly to you inbox.</p>
            <form class="form-inline">
              <div class="form-group form-footer mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Your Email</label>
                <input type="password" class="form-control form-footer" id="inputPassword2" placeholder="Your Email">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </form>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">

          <div class="col-md-6 mb-md-0 mb-3">

            <h5 class="text-uppercase ft-nav-title">Navigation</h5>

            <ul class="list-unstyled">
              <li>
                <a href="index.html" class="ft-nav-item">Home</a>
              </li>
              <li>
                <a href="about.html" class="ft-nav-item">Sign in </a>
              </li>
              <li>
                <a href="contact.html" class="ft-nav-item">Books</a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </footer>
    
</body>
</html>