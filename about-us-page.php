<?php
session_start();
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="style.css">
    <!-------------------------------------------------------------------------------------------------------------------->


    <title>ParkCo</title>
  </head>
  <body>
   <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="homepage1.php">ParkCo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us-page.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-us.php">Contact Us</a>
      </li>
      <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
        <li class="nav-item" >
        <a class= "nav-link text-white"> <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
        </li>
        <li class="nav-item">
        <a class="nav-link text" href="logout.php" > Sign Out </a>
        </li>
        <?php elseif(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
        <li class="nav-item">
        <a class="nav-link text" href="signin.php" > Sign In </a>
        </li>
        <?php endif; ?>
   </div>
</nav>

<!-- End of Nav Bar -->

<!-- Background image -->
  <div>
    <img src="images/b2.png" class="img-responsive" style="width:100%; opacity: 96%">
  </div>
  <!-- Background image end -->
  <div class="row" style="width: auto;">
    <div class="col-lg-12">
      <h2 class="text-center mt-5">Serving Since 1930 <br></h2>
    </div>
    <div class="col-lg-11 mt-3 ml-5 mb-5 text-center text-secondary">
    <p>Parkway Corporation is a Philadelphia-based family-owned and operated company that has embraced the American Dream since 1930. For more than three generations of leadership, Parkway has acquired, developed, managed, sold and leased real estate and parking facilities across the United States and Canada. </p>
  </div>

  <div class="col-lg-12">
      <h2 class="text-center text-dark">Our People <br></h2>
    </div>
    <div class="col-lg-11 ml-5 mt-3 mb-5 text-center text-secondary">
    <p>Collectively, Parkway's team have literally hundreds of years of real estate and parking experience. This deep core competency is the basis for our current and future success. We are uniquely positioned to determine the best solution for any opportunity, and we are one of a handful of companies with experience in developing millions of square feet of parking facilities. </p>
  </div>
  <div class="col-lg-12">
      <h2 class="text-center">Green Initiatives <br></h2>
    </div>
    <div class="col-lg-11 ml-5 mt-3 mb-4 text-center text-secondary">
    <p>30% of Parkway's parking lots depend on the sun as their only source of power. 15% of Parkway's Philadelphia parking facilities are equipped with electric vehicle charging stations that are a free amenity to Parkway customers. Parkway Electric Vehicle stations boast an average customer rating of  9 (out of a possible 10) on Plugshare, the #1 downloaded EV charging station locator application. Recent lighting upgrades saved well over 500 tons of CO2 emissions annually. This is equivalent to the amount of carbon filtered annually by 100 acres of pine forests.</p>
  </div>
  </div>

  <div class="col-lg-12 mb-5 text-center text-dark">
    <p>Visit our homepage to explore our facilities <a href="homepage1.php">ParkCo</a></p>

  </div>
  <!-- Footer Start -->
<footer class="container-fluid mt-5">
    <div class="row" style="margin: auto">
      <p class="col-sm-4">&copy; 2020 ParkCo</p>
      <ul class="col-sm-8">
        <li class="col-sm-1 fa fa-twitter fa-lg white-text fa-2x">
          </li>
        <li class="col-sm-1 fa fa-facebook-f fa-lg white-text fa-2x">
          </li>
        <li class="col-sm-1 fa fa-instagram fa-lg white-text fa-2x">
          </li>
        </ul>
    </div>
  </footer>
  <!-- Footer End -->
    <!--Grid row-->


    <!-------------------------------------------------------------------------------------------------------------------->    
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>