<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    h4{
      color:whitesmoke;
    }
    h4>a{
      text-decoration: none;
      color: whitesmoke;
      margin-right: 50px;
    }
  </style>
  
  
  </head>
  <body>
   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-1">
  <div class="container-fluid">
    <a class="navbar-brand" href="banners.php"><h5>FOODYROOM</h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item px-2">
          <a class="nav-link" aria-current="page" href="welcome.php"><h5>Home</h5></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="about.php"><h5>ABOUT</h5></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link " href="signin.php"><h5>SIGN-IN</h5></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="login.php"><h5>LOGIN</h5></a>
        </li>
    
      </ul>
    

      <!-- username -->
       <?php 
       if(isset($_SESSION['username']))
       
     {
      echo"
     <h4 class='d-flex nav-items navbar nav'><a href='logout.php'>". $_SESSION['username']."</a><?h4>";
;
    
    
       }
    ?>
    </div>
  </div>
</nav>
   
  </body>
</html>