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
  <body style="background-color: #f9fdff">   
 <!-- Modal popup -->
  <div class="modal" id="thank-you-modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Sent!</h3>
          </div>
          <div class="modal-body">            
           <p class="text-center">Thank you!</p>
        </div>        
      </div> 
    </div>
  </div>

<!-- Modal popup end -->



  <!-- Navigation Bar -->
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
        <a class="nav-link" href="contact-us.php">Contact Us</a></li>    
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
 <!-- End of Navigation Bar -->

<!-- Backgroung Image -->
 <div>
    <img src="images/cu2.png" class="img-responsive" style="width:100%">
 </div>
 <!-- End of Background Image -->



<!-- Contact Form -->
<div class="container-fluid" style="background-color: #f9fdff">
  <div class="row" style="background-color: white">    
      <form class = "get-in-touch" action="http://localhost/project/PARK-Company-Parking-Project/mail-form.php" method="post">
    <div class="container">     
      <div class="contact-form class text-center">
        <div class="form-field col-lg-14">
          <input id="name" type="text" name="name" class="input-text" placeholder="Full Name" required>
        </div>        
        <div class="form-field col-lg-14">
          <input id="email" type="text" name="email" class="input-text" placeholder="Email" required>
         </div>
        <div class="form-field col-lg-14">
          <input id="message" type="text" name="message" class="input-text" placeholder="Message" required>          
        </div>
        <div class="form-field col text-center" >
          <input type="submit" name="submit" class="submit-btn" value="Send">          
          <!-- <a href="" value="Send" data-toggled = "modal" data-target="#thank-you-modal" class="submit-btn">Send</a> -->
        </div>
    </div>
    </div>
  </form > 
  <div class="col">

 <!-- Google Map -->

<div class="row" style="margin: auto">
  <div class="col-md-9 ml-5 mt-5 text-center"><h3>Map and Directions</h3></div>
	<div class="col-lg-14">
		<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="ml-5 mr-5 mt-3" >
			<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":350,"width":600,"zoom":15,"queryString":"150 North Broad Street, Philadelphia, PA, USA","place_id":"ChIJy4mssi3GxokRZ-QR7qJSou0","satellite":false,"centerCoord":[39.95609236330441,-75.16310465000002],"cid":"0xeda252a2ee11e467","lang":"en","cityUrl":"/us/pa/philadelphia","cityAnchorText":"Map of Philadelphia, Pennsylvania, United States","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"308079"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=308079';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/map-embed">1 Map</a></div>
		</div>
      </div>
  </div>
</div>

<!-- End of map --> 

<!-- Display Contact Information -->
<div class="row">
<div class="col text-center">
          <p><h2> Get In Touch With Us</h2></p>
    </div>
</div>

<div class="row text-center mt-5 ml-3 mr-3 mb-3" style="margin: auto">
    <div class="col-lg-4 mb-5 border-bottom border-right border-info">
    	<div class="card-header border-info back-col border-left border-top border-right"><strong>Email</strong></div>
    	<span class="fa fa-envelope-open fa-3x mt-4" style="color: #1b465b"></span> 
    	<p><br>customercare@parkcompany.com<br><br></p>
    </div>
    <div class="col-lg-4 mb-5 border-bottom border-info">
    	<div class="card-header border-info back-col border-left border-top border-right"><strong>Location</strong></div>
    	<span class="fa fa-location-arrow fa-3x mt-4" style="color: #1b465b"></span> 
    	<p><br>150 N. Broad St. Philadelphia, PA 19102<br><br></p>
    </div>
    <div class="col-lg-4 mb-5 border-bottom border-left border-info">
    	<div class="card-header border-info back-col border-left border-top border-right"><strong>24/7 Customer Service</strong></div>
    	<span class="fa fa-phone fa-3x mt-4" style="color: #1b465b"></span> 
    	<p><br>1-800-656-4398</p>
    </div>

</div>
<!-- End of Contact Information -->
 
    <!-------------------------------------------------------------------------------------------------------------------->    
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>