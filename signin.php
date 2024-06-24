




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
    <?php
    require 'components/navbar.php';
    ?>
    <form action="./rsignin.php" class="needs-validation" method="post">
   





   

   <div class="container mx-12 p-2">
    <div class="container p-2 mt-4 mb-3 text-center">
        <marquee>    <h2>WELCOME ! TO SIGNIN PAGE</h2></marquee>
    </div>
    <div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Enter Username</label>
    <div class="col-sm-10">
      <input type="text"  required name="username" class="form-control" id="inputPassword" min="6">
    </div>
  </div>
  <div class="mb-3 row mt-4">
    <label for="staticEmail"  class="col-sm-2 col-form-label"><b>Email</b></label>
    <div class="col-sm-10">
      <input type="email"  required name="email" class="form-control" id="staticEmail" placeholder="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" required name="password" class="form-control"  minlength="6" maxlength="8" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Confirm Password</label>
    <div class="col-sm-10">
      <input type="password"  required class="form-control" minlength="6" maxlength="8" name="cpass">
    </div>
  </div>
  
   </div>
   <div class="container textcenter p-2 mt-4 mb-3">
  <button name="button" class="btn btn-primary" value="signin">Signin</button>
  <button name="button2" class="btn btn-success mx-3"><a style ="text-decoration:none; color:white" href="login.php">login</a>
  
  </button>
   </div>
   </form>
   <script>
    (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
   </script>
  </body>
</html>
   
