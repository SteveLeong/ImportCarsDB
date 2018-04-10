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
			<ul class="givusacall">
				<li>Give us a call : +number </li>
			</ul>
			<ul class="logreg">
				<li><a href="#">Login </a> </li>
				<li><a href="#"><span class="register">Register</span></a></li>
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
				<li class="active"><a href="index.php">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<?php?>
					</ul>
				</li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
						<ul class="dropdown-menu dropdowncostume">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="3">3</a></li>
						</ul>
				</li>
				<li>
					<a href="CarTemp.php">CONTACT</a>
 
				</li>
				<button><span class="postnewcar">POST NEW CAR</span></button>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->

<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>A L L<span class="carstxt">C A R S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">

			<?php 
				$user = 'root';
				$password = 'root';
				$database = 'ImportCarsDB';
				$host = 'localhost';
				$conn = new mysqli($host, $user, $password, $database);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				$model = 'Nissan GTR';
				// SQL QUERY
				$sql = "SELECT * FROM car";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {

						$headdivs = '<div class="col-lg-6 costumcol colborder1">
										<div class="row costumrow">
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
												<img src="' . $row["image"] .'" alt="porsche">
											</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
											<div class="featurecontant">';

						echo $headdivs . "
										<h1>" . $row["model"] . "</h1>
										<p>$" . $row["year"] . ",<br>
											" . $row["type"] . "</p>
										<h2>Price $" . $row["price"] . " </h2> 
											</div>
										</div>
									</div>
								</div>";
						/*		
						echo '<button id="btnRM" onclick="rmtxt()">READ MORE</button>
						<div id="readmore">
								<h1>' . $row["model"] . '</h1>
								<p>"' . $row["year"] . '<br>
								' . $row["type"] . ' ,<br>
								' . $row["mileage"] . 'km ,
								
								
								</p>
								<button id="btnRL">READ LESS</button>
						</div>';*/
					}
				} else {
					echo "0 results"; 
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