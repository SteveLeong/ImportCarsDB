<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<?php
			session_start();
			
			require 'Credentials.php';
			
			$conn = new mysqli($host, $user, $password, $database);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			
			//SQL QUERY
			$model= $_GET["model"];
			$transmission = $_GET["transmission"];
			$engine = $_GET["engine"];
			$year = $_GET["year"];
			$manufacturer = $_GET["manufacturer"];
			$bodytype = $_GET["bodytype"];
            $price = $_GET["price"];
            
            echo $model;


			$sql = "INSERT INTO car(model, price, transmission, engine, year, manufacturer, ethnicity, bodytype, stock, image, descrip) VALUES 
            ('$model', '$price', '$transmission', '$engine', '$year', '$manufacturer', null, '$bodytype', null, null, null)";
            
			$result = $conn -> query($sql);
			
			echo "Car Posted!  $model";
			echo '<a href="index.php">CLICK PLZ</a>';
		?>
	</body>
</html>