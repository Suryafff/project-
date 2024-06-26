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
   

    <?php 


if(isset($_SESSION['username']))
{
  echo "<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Bootstrap demo</title>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
    
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
    </head>
    <body>

    <!--  crousels-->
    <div id='carouselExampleCaptions' class='carousel slide'  data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='2' aria-label='Slide 3'></button>
  </div>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img src='images/burger' class='d-block w-100' alt='...'>
      <div class='carousel-caption d-none d-md-block'>
        <h1>Wanna To Try Something new! and ever Testier</h1>
        <h4>Let`s Try EGYPTIAN burger and feel the Heaven on Earth.</h4>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='images/pizzahp.jpg' class='d-block w-100' alt='...'>
      <div class='carousel-caption d-none d-md-block'>
      <h1>Wanna To Try Something new! and ever Testier</h1>
      <h4>Let`s Try EGYPTIAN LA LINA pizza and feel the Heaven on Earth.</h4>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='images/momos' class='d-block w-100' alt='...'>
      <div class='carousel-caption d-none d-md-block'>
      <h1>Wanna To Try Something new! and ever Testier</h1>
      <h4>Let`s Try JAPANESSE Momos and feel the Heaven on Earth.</h4>
      </div>
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>


<!-- cards -->
<div class='row mt-8 pt-4'>
  <div class='col-sm-6 mb-3 mb-sm-0'>
    <div class='card'>
      <div class='card-body'>
        <img src='images/pizzahp.jpg' alt='' srcset=''>
        <h5 class='card-title'>Special treat for anyone</h5>
        <p class='card-text'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus aspernatur ut doloribus aliquid, est harum?.</p>
        <a href='login.php' class='btn btn-primary'>buy now</a>
      </div>
    </div>
  </div>
  <div class='col-sm-6'>
    <div class='card'>
      <div class='card-body'>
      <img src='images/pizzahp.jpg' alt='' srcset=''>
        <h5 class='card-title'>Special treat for anyone</h5>
        <p class='card-text'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus aspernatur ut doloribus aliquid, est harum?.</p>
        <a href='login.php' class='btn btn-primary'>buy now</a>
      </div>
    </div>
  </div>
</div>

<!--footer--!>
<!-- Footer -->
<footer class='text-center text-lg-start bg-body-tertiary text-muted'>
  <!-- Section: Social media -->
  <section class='d-flex justify-content-center justify-content-lg-between p-4 border-bottom'>
    <!-- Left -->
    <div class='me-5 d-none d-lg-block'>
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href='' class='me-4 text-reset'>
        <i class='fab fa-facebook-f'></i>
      </a>
      <a href='' class='me-4 text-reset'>
        <i class='fab fa-twitter'></i>
      </a>
      <a href='' class='me-4 text-reset'>
        <i class='fab fa-google'></i>
      </a>
      <a href='' class='me-4 text-reset'>
        <i class='fab fa-instagram'></i>
      </a>
      <a href='' class='me-4 text-reset'>
        <i class='fab fa-linkedin'></i>
      </a>
      <a href='' class='me-4 text-reset'>
        <i class='fab fa-github'></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=''>
    <div class='container text-center text-md-start mt-5'>
      <!-- Grid row -->
      <div class='row mt-3'>
        <!-- Grid column -->
        <div class='col-md-3 col-lg-4 col-xl-3 mx-auto mb-4'>
          <!-- Content -->
          <h6 class='text-uppercase fw-bold mb-4'>
            <i class='fas fa-gem me-3'></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class='col-md-2 col-lg-2 col-xl-2 mx-auto mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>
            Products
          </h6>
          <p>
            <a href='#!' class='text-reset'>Angular</a>
          </p>
          <p>
            <a href='#!' class='text-reset'>React</a>
          </p>
          <p>
            <a href='#!' class='text-reset'>Vue</a>
          </p>
          <p>
            <a href='#!' class='text-reset'>Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class='col-md-3 col-lg-2 col-xl-2 mx-auto mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>
            Useful links
          </h6>
          <p>
            <a href='#!' class='text-reset'>Pricing</a>
          </p>
          <p>
            <a href='#!' class='text-reset'>Settings</a>
          </p>
          <p>
            <a href='#!' class='text-reset'>Orders</a>
          </p>
          <p>
            <a href='#!' class='text-reset'>Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class='col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>Contact</h6>
          <p><i class='fas fa-home me-3'></i> New York, NY 10012, US</p>
          <p>
            <i class='fas fa-envelope me-3'></i>
            info@example.com
          </p>
          <p><i class='fas fa-phone me-3'></i> + 01 234 567 88</p>
          <p><i class='fas fa-print me-3'></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class='text-center p-4' style='background-color: rgba(0, 0, 0, 0.05);'>
    © 2021 Copyright:
    <a class='text-reset fw-bold' href='https://mdbootstrap.com/'>MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    </body>
    </html>";
}
else{
   echo "<script>
   window.location.href='login.php';
   </script>";
}
?>


      
   
  </body>
</html>
