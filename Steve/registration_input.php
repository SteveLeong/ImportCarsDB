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
			
			//SQL QUEnRY
			$username = $_GET["uname"];
			$email = $_GET["eml"];
			$password = $_GET["psw"];

			$sql = "INSERT INTO user(username, name, age, sex, email, address, password) VALUES 
					('$username', null, null, null, '$email', null, '$password') ";
			$result = $conn -> query($sql);
			
			//echo "Registration Successful!  Welcome $id";
			echo '<a href="index.php"> Welcome, ' . $username . '. Click to redirect</a>';
		?>
	</body>
</html>