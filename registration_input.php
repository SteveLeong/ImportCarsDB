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
			$database = 'ImportCarsDB';
			$host = 'localhost';
			
			$conn = new mysqli($host, $user, $password, $database);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			
			//SQL QUERY
			$username = $_POST["uname"];
			$email = $_POST["eml"];
			$password = $_POST["psw"];
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$sql = "INSERT INTO user('$username', '$email', '$password')";
			$result = $conn -> query($sql);
			
			echo "Registration Successful!  Welcome $id"
			echo "<meta http-equiv=\"Refresh\" content=\"2; index.html\">";
		?>
	</body>
</html>