<?php

session_start();

if(isset($_POST['valueToSearch']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `parking1` WHERE State LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `parking1`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "user_registration");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Landing Page</title>
        <meta charset="utf-8" />

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="main.css">

        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <!-- Start of Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="homepage1.php">ParkCo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage1.php">Home<span class="sr-only">(current)</span></a>
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
        
       
            <!-- RESULTS TABLE -->
           
<div>
  <h2 class="text-center mt-5">Parking Results</h2>
</div>
<div class="col-lg-12 ml-5 text-center">
        <form class="ml-auto" action="http://192.168.64.2/MyphpCode/PARK-Company-Parking-Project/search.php" method="post">
          <input class="form-control mt-5 w-75 ml-5 SearchBar" type="text" name="valueToSearch" placeholder="Please enter state"/>
          <div class="active-cyan-4 mb-4">
          </div>
        </form>
      </div>
<div class="text-left ml-3">
  <?php echo"<a href='http://192.168.64.2/MyphpCode/PARK-Company-Parking-Project/advance-search.php?state={$valueToSearch}'><strong>Filtered Search</strong></a>" ?>
</div>
<table class="table table-striped mt-4">
  <thead class="" style="background-color: #D3D3D3">
    <tr>
      <th scope="col">Parking Lot</th>
      <th scope="col">Street Address</th>
      <th scope="col">Rate</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip Code</th>
      <th scope="col">Capacity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    
    <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['ParkingLot'];?></td>
                    <td><?php echo $row['StreetAddress'];?></td>
                    <td><?php echo $row['Rate'];?></td>
                    <td><?php echo $row['City'];?></td>
                    <td><?php echo $row['State'];?></td>
                    <td><?php echo $row['ZipCode'];?></td>
                    <td><?php echo $row['Capacity'];?></td>
                    <td><?php echo $row['Price'];?></td>
                </tr>
                <?php endwhile;?>
  </tbody>
</table>
       <!--  </form> -->



 <!-- Footer Start -->
<footer class="container-fluid mt-5 fixed">
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