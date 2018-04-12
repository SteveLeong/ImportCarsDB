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
            $model = $_SESSION['model'];

			require 'Credentials.php';
			
			$conn = new mysqli($host, $user, $password, $database);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "DELETE FROM car WHERE model = '$model'";
					
			$result = $conn -> query($sql);
			
			echo $model . ' has been deleted. <a href="AllCars_admin.php"> Back to All Cars</a> <br>';
		?>
	</body>
</html>