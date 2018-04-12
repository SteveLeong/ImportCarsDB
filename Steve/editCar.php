
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
			$model = $_SESSION['model'];
			$transmission = $_GET["transmission"];
			$engine = $_GET["engine"];
			$year = $_GET["year"];
			$manufacturer = $_GET["manufacturer"];
			$bodytype = $_GET["bodytype"];
            $price = $_GET["price"];
			
			$sql = "UPDATE car
					SET transmission = '$transmission', engine = '$engine', year = '$year', manufacturer = '$manufacturer', bodytype = '$bodytype', price = '$price'
					WHERE model = '$model'";
					
			$result = $conn -> query($sql);
			
			echo "Car Edited: $model  ";
			echo '<a href="AllCars_admin.php">BACK TO ALL CARS</a>';
		?>
	</body>
</html>