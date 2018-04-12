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
            $_SESSION['model'] = $_GET['modelname'];
			
			echo 'Are you sure you want to delete: ' . $model . '? <a href="deleteCar.php" > YES</a> <br>';
			echo '<a href="AllCars_admin.php">No, Return to All Cars</a>';
		?>
	</body>
</html>