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
			
			$user = 'root';
			$password = 'root';
			$database = 'importcarsdb';
			$host = 'localhost';
			
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
			$sql = "INSERT INTO car(model, price, transmission, engine, year, manufacturer, ethnicity, bodytype, stock, image, desc ) VALUES('$model','$price' ,'$transmission', '$engine', '$year', '$manufacturer',null ,'$bodytype',null, null,null)";
			$result = $conn -> query($sql);
			
			echo "Car Posted!  $model";
			echo '<a href="index.html">CLICK PLZ</a>';
		?>
	</body>
</html>