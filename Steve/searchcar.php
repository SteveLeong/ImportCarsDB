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
			$manufacturer = $_GET['manufacturer'];
			$model= $_GET['modelname'];
			$year = $_GET['year'];
			$bodytype = $_GET['bodytype'];
			
			$query = "SELECT * FROM car WHERE manufacturer='$manufacturer'";
			
			include 'CarTempSearch.php';
					
		?>

	</body>
</html>