<?php include('signinform.php'); 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="stylereg.css">

    <!-- The navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="homepage1.php">ParkCo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
    <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Links -->
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
				<a class="nav-link" href="signin.php" > Sign In </a>
				</li>
		<?php endif; ?>
        </ul>      
        </div>
    </nav>
    <!-- End navbar-->
</head>
<body>
    <h1 class="text-center mt-3 p-5"> Welcome Back! </h1>

    <div class="row" style="margin: auto">
        <!-- signin form -->
    <div class="col-lg-7">
    <div class="container-md">
        <div class="login-container">
        <h2>Sign In</h2>
        <p>Sign in with username and password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block text-danger"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block text-danger"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="reg.php">Sign up now</a>.</p>
        </form>
    </div>
    </div> 
</div>
<!-- end signin form  -->
<!-- picture -->
<div class="col-lg-5">
   <img src="images/signin-image.jpg" class="img-responsive" >
</div>
<!-- end of pic -->
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>