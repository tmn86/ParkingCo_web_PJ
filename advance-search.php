
<?php
	session_start();
	function console_log($output, $with_script_tags = true) {
		$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
	');';
		if ($with_script_tags) {
			$js_code = '<script>' . $js_code . '</script>';
		}
		echo $js_code;
	}

	if (isset($_GET['state'])) {
		$stateFromMainPage = $_GET['state'];
	} else {
		$stateFromMainPage = "";
	}


	$conn = mysqli_connect("localhost", "root", "", "user_registration");	
	$with_any_one_of = "";
	$with_city = "";
	$with_state = "";
	$with_zip = "";
	$search_in = "";
	$advance_search_submit = "";
	
	$queryCondition = "";
	$queryCondition = " WHERE State LIKE '%" . $stateFromMainPage . "%'";
	if(!empty($_POST["search"])) {
		$advance_search_submit = $_POST["advance_search_submit"];
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {
				$queryCases = array("with_any_one_of");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "with_any_one_of":
						$with_any_one_of = $v;
						$wordsAry = explode(" ", $v);
						$wordsCount = count($wordsAry);
						for($i=0;$i<$wordsCount;$i++) {
							if(!empty($_POST["search"]["search_in"])) {
								$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $wordsAry[$i] . "%'";
							} else {
								$queryCondition .= "ParkingLot LIKE '%" . $wordsAry[$i] . "%' OR StreetAddress LIKE '%" . $wordsAry[$i] . "%' OR Rate LIKE '%" . $wordsAry[$i] . "%' OR City LIKE '%" . $wordsAry[$i] . "%' OR State LIKE '%" . $wordsAry[$i] . "%' OR ZipCode LIKE '%" . $wordsAry[$i] . "%'";
							}
							if($i!=$wordsCount-1) {
								$queryCondition .= " OR ";
							}
						}
						break;
					case "search_in":
						$search_in = $_POST["search"]["search_in"];
						break;
				}
			}
		}
	}
	$orderby = " ORDER BY id desc";
	$sql = "SELECT * FROM parking1 " . $queryCondition;
	$result = mysqli_query($conn,$sql);
	
?>
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
	<script>
		function showHideAdvanceSearch() {
			if(document.getElementById("advanced-search-box").style.display=="none") {
				document.getElementById("advanced-search-box").style.display = "block";
				document.getElementById("advance_search_submit").value= "1";
			} else {
				document.getElementById("advanced-search-box").style.display = "none";
				document.getElementById("with_city").value= "";
				document.getElementById("with_state").value= "";
				document.getElementById("with_zip").value= "";
				document.getElementById("search_in").value= "";
				document.getElementById("advance_search_submit").value= "";
			}
		}
			</script>
		</head>
		<body>		
	    <div>
			<?php echo"<form name='frmSearch' method='post' action='advance-search.php?state={$stateFromMainPage}'>" ?>
			<input type="hidden" id="advance_search_submit" name="advance_search_submit" value="<?php echo $advance_search_submit; ?>">
			<div class="search-box">
				<label class="search-label mt-4 ml-3"><strong>Explore our facilities:</strong></label>
				<div>
					<input type="text" class = "form-control mr-3 ml-3 w-75"
					name="search[with_any_one_of]" placeholder="Enter address, city, zip code,state, or rate (hourly/monthly)"class="demoInputBox" value="<?php echo $with_any_one_of; ?>"	/>
				</div>				
					<div>
						<select name="search[search_in]" id="search_in" class="dropdown btn btn-light mt-3 ml-3 text-left">
							<option value="">Select Filter...</option>
							<option value="StreetAddress" <?php if($search_in=="StreetAddress") { echo "selected"; } ?>>Street Address</option>
							<option value="City" <?php if($search_in=="City") { echo "selected"; } ?>>City</option>
							<option value="State" <?php if($search_in=="State") { echo "selected"; } ?>>State</option>
							<option value="Rate" <?php if($search_in=="Rate") { echo "selected"; } ?>>Rate</option>
							
                            <option value="ZipCode" <?php if($search_in=="ZipCode") { echo "selected"; } ?>>Zip Code</option>
                        </select>
					</div>
				</div>
				
				<div>
					<input type="submit" name="go" class="btn btn-primary mt-3 ml-3" value="Search">
				</div>
			</div>
			<div>
			<table class="table table-striped">
  <thead style="background-color: #D3D3D3">
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
    
	<?= console_log($sql); ?><!-- debug: let you read the $sql in the console -->
    <?php while($row = mysqli_fetch_array($result)):?>
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
			</div>
			<?php ?>
		</div>

		 <!-- Footer Start -->
<footer class="container-fluid mt-5 fixed">
    <div class="row" style="margin: auto;">
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