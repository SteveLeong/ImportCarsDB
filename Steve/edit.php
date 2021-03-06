<?php
	session_start();
	$_SESSION['model'] = $_GET['modelname'];
	/**GET model name from href */
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Import Car DB Registration</title>
		<meta name="description" content="group 20db regis">
		<meta name="author" content="minh ngo">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="style/slider.css">
		<link rel="stylesheet" type="text/css" href="style/mystyle.css">

		<style>
			body {font-family: BebasNeue Regular;}
			
			input[type=text], input[type=password], input[type=email] {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				box-sizing: border-box;
				}
			button {
				background-color: #191919;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 100%;
				}
			button:hover {
				opacity: 0.8;		
				}
				
			.cancelbtn {
				width: auto;
				padding: 10px 18px;
				background-color: #191919;
				}
				
			.container {
				padding: 16px;
				}
			span.psw {
				float: right;
				padding-top: 16px;
				}
				
			.imgcontainer {
				text-align: center;
				margin: 24px 0 12px 0;
				}
			img.avatar {
				width: 40%;
				border-radius: 50%;
				}
		</style>
	</head>
	<body>
	
	<!-- Header -->
	<div class="allcontain">
		<div class="header">
			
			<ul class="givusacall">
					<li><a href="Template_admin.php">Home </a> </li>
					</ul>
			<ul class="logreg">
				<li><a href="index.php">Logout </a> </li>
				<!--<li><a href="registration.html"><span class="register">Register</span></a></li>-->
			</ul>
		</div>
	</div>

	<!-- edits -->
	<h1>EDIT FORM<h1>
		<div class = "editcar">
			<form action="editCar.php" method="GET">
				  
				<div class="container">
					<button type="submit">Upload Photo</button>
					
					<label for="transmission"><b>Transmission</b></label>
					<input type="text" placeholder="Enter Transmission Type" name="transmission" required>
					
					<label for="engine"><b>Engine</b></label>
					<input type="text" placeholder="Enter Engine Type" name="engine" required>
					
					<label for="year"><b>Year</b></label>
					<input type="text" placeholder="Enter Year" name="year" required>
					
					<label for="manufacturer"><b>Manufacturer</b></label>
					<input type="text" placeholder="Enter Car Manufacturer" name="manufacturer" required>
					
					<label for="bodytype"><b>Body Type</b></label>
					<input type="text" placeholder="Enter Car Body Type" name="bodytype" required>
					
					<label for="price"><b>Price</b></label>
					<input type="text" placeholder="Enter Price" name="price" required>
					
					<button type="submit">Edit Car</button>
				</div>

				<div class="container">
					<button type="button" class="cancelbtn">Cancel</button>
				</div>

			</form>
		</div>
	</body>
</html>