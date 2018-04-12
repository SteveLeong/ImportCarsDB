<?php
	session_start();
	$user = $_SESSION['username'];
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php $title?> </title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<?php
				echo '<ul class="givusacall">
					<li>Welcome,' .  $user . ' </li>
				</ul>'
			?>
			<ul class="logreg">
				<li><a href="Template_user.php">Logout </a> </li>
				<!--<li><a href="registration.html"><span class="register">Register</span></a></li>-->
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="Template_user.php">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="CarCategoryJ.php">Japanese</a></li>
						<li><a href="CarCategoryE.php">European</a></li>
					</ul>
				</li>
				
				<li>
					<a href="AllCars_user.php">ALL CARS</a>
 
				</li>
				<button><a href="post.html" <span class="postnewcar">POST NEW CAR</span></a></button>
			</ul>
		</div>
	</nav>
</div>

<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span><?php echo $header ?><span class="carstxt">C A R S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">

			<?php 
				require 'Credentials.php';
				$conn = new mysqli($host, $user, $password, $database);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				// SQL QUERY
				$sql = $query;
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$modelname = $row["model"];
						$headdivs = '<a href="indCarTemp_user.php?modelname=' . $modelname . '">
									<div class="col-lg-6 costumcol colborder1">
										<div class="row costumrow">
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
												<img src="' . $row["image"] .'" alt=" ' .$row["model"] .' ">
											</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
											
											<div class="featurecontant">';
													/**------ BUTTON ABOVE ------
													 * href sends model name to file
													*/
						if($row["stock"] == null){
							$stock = '<span> <font color="green">In Stock</font></span>';
						}else{
							$stock = '<span> <font color="red">Out of Stock</font></span>';
						}
						//$_SESSION["model"] = $row["model"];
						echo $headdivs . "
										<h1>" . $row["model"] . "</h1>
										<p> Year: " . $row["year"] . " <br> Transmission Type: " . $row["transmission"] ."<br> Body Type: " .  $row["bodytype"] .  "<br>
											Engine: " . $row["engine"] . "<br> <br>
											" . $row["ethnicity"] . "<br>
											 " . $stock . "</p>
										<h1>Market Price $" . $row["price"] . " </h1> 
											</div>
										</div>
									</div>
									</a>
								</div>";	
					}
				} else {
					echo "0 results found"; 
				}
				$conn->close();
			?>
			
		</div>
	</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>