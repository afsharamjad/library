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
<style>
    .container{
    background:gray;
    width:70%;
    padding-top:23px;
    padding-left:23px;
    padding-bottom:25px;
    border-radius:23px;
    
    }
    
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
                <a class="nav-link" href="ebook.php">DOWNLOAD E-BOOKS</a>
              </li>
            </ul>
  
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row mt-4 pb-4">
            <?php
            include 'connect.php';
            $stmt = $db -> prepare("SELECT*FROM booklist");
            $stmt -> execute();
            $result = $stmt ->get_result();
            while($row = $result ->fetch_assoc()):

            ?>
            <div class="col-lg-3">
                <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2">
                      <img src="<?= $row['book_image']?>" class="card-img-top" height="200" width="150">
                      <div class="card-body p-1">
                         <!-- <h6 class="card-title"><?= $row['book_Name'] ?></h6> -->
                         <h6 class="card-title"><?= $row['book_pages'] ?></h6>
                         <button type="button" class="btn btn-secondary btn-sm">Download</button>
                      </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>