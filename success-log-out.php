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

    <title>Thank you</title>
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


<!-- Thank you message -->
    <div class="row" style="margin: auto">
      <div class="col-lg-12 text-center">
          <p class="display-4 mt-5 border-top"><h2>Thank you!</h2></p>
          <p><small>You have been successfully logged out!</small></p>
      </div>
      <div class="col-lg-12">
        <img src="images/ISO673AP.jpg" class="text-center img-responsive" style="width: 4%; margin-left: 48%;">         
      </div>      
      <div class="col-lg-12 text-center mt-5" >
        <a href="homepage1.php">Back To Homepage</a>
      </div>  
    </div>
<!-- End of Thank you message -->
   

    <!-- Footer Start -->
<footer class="container-fluid mt-5 fixed-bottom">
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
    </body>

    <!-------------------------------------------------------------------------------------------------------------------->    
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>