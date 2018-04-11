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
			$username = $_GET["uname"];
			$password = $_GET["psw"];

			$sql = "SELECT username FROM user WHERE username = '$username' AND password = '$password'";
			$result = $conn -> query($sql);
			$row = $result -> fetch_assoc();
			
			//admin access
			if($row > 0){
				//echo '<a href="index.php"> Welcome, ' . $row["username"] . '. Click to redirect</a>';
				
				$user = $row["username"];
				$sql2 = "SELECT username FROM admin WHERE username = '$user'";
				$result2 = $conn -> query($sql2);
				$row2 = $result2 -> fetch_assoc();
				if($row2 > 0){
					
					echo '<a href="index.php"> Welcome Admin ' . $username . '! Click to redirect</a>';
					//insert admin page here, need to implement still
				}else{
					echo '<a href="index.php"> Welcome, ' . $username . '. Click to redirect</a>';
				}
			}
			else {
				echo '<p>Incorrect Username/password, Click to <a href="login.html">try again</a></p>';
				echo '<p>Or, Register <a href="registration.html">here.</a></p>';
			}
	
		?>
	</body>
</html>