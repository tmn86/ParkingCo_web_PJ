<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
</body>
</html>
<head>
  <title>ParkCo</title>
  <meta charset="utf-8" />

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="main.css">
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
  <section class="jumbotron">
    <div class="container">
      <div class="row text-center">
      	<div class="col-lg-12">
        <strong><p class="display-4">Welcome to ParkCo</p></strong>
        </div>
        <div class="col-lg-12">
        <h4>Best parking in the Tri-State Area </h4>
    	</div>
    	<div class="col-lg-12">
        <a class="btn btn-light" href="http://192.168.64.2/MyphpCode/PARK-Company-Parking-Project/advance-search.php">See all</a>
        
        <!-- Search bar -->
       <div class="col-lg-12 ml-5 text-center">
        <form class="ml-auto" action="http://192.168.64.2/MyphpCode/PARK-Company-Parking-Project/search.php" method="post">
          <input class="form-control mt-5 w-75 ml-5" type="text" name="valueToSearch" placeholder="Please enter state"/>
          <div class="active-cyan-4 mb-4">
          </div>
        </form>
      </div>
         	
</div>
    </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="row">
      <div class="col-sm-6">
        <p>Philadelphia</p>
        <img style="height: 320px;" src="https://www.visitphilly.com/wp-content/uploads/2019/11/WilliamPenn_ElevatedAngles_2200x1237px.jpg">
      </div>
      <div class="col-sm-6">
        <p>New York</p>
        <img style="height: 320px;" src="https://blog-www.pods.com/wp-content/uploads/2019/04/MG_1_1_New_York_City-1.jpg">
      </div>
      <div class="col-sm-6">
        <p>Jersey City</p>
        <img style="height: 320px;" src="https://cdn.britannica.com/40/124040-050-1C958F63/Jersey-City-NJ.jpg">
      </div>
      <div class="col-sm-6">
        <p>Newark</p>
        <img style="height: 320px;" src="https://cdn.britannica.com/43/144943-050-BEA1A6DA/Newark-NJ.jpg">
      </div>
    </div>
    
  </section>
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
</body>
</html>