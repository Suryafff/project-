
<?php
require 'navbar.php'


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <form action="./rlogin.php" method="post">
  <div class="container mx-12 p-2">
    <div class="container p-2 mt-4 mb-3 text-center">
        <marquee>    <h2>WELCOME ! TO LOGIN PAGE</h2></marquee>
    </div>
  <div class="mb-3 row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10 ">
      <input type="text" name="email" class="form-control " id="staticEmail" placeholder="email@example.com" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" required class="form-control" id="inputPassword">
    </div>
  </div>
  <button name="button" class="btn btn-primary" value="signin">login</button>
  </div>
  </form>
  </body>
</html>
