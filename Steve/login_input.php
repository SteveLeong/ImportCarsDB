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
			$password = $_POST["psw"];
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$sql = "SELECT username FROM 'user' WHERE username = '$username'";
			$result = $conn -> query(sql);
			$row = $result -> fetch_assoc();
			//admin access
			if($row > 0){
				$sql2 = "SELECT username FROM 'admin' WHERE username = '$username' AND password = '$password'";
				$result2 = $conn -> query($sql2);
				$row = $result2 -> fetch_assoc();
				$_SESSION['username'] = $row["username"];
				echo "Login successful, welcome admin $username !"
				//insert admin page here, need to implement still
			}
			else {
				$sql3 = "SELECT username FROM 'buyer' WHERE username = '$username' AND password = '$password'";
				$result3 = $conn -> query($sql3);
				$row2 = $result3 -> fetch_assoc();
				$_SESSION['username'] = $row2["name"];
				echo "Login successful, welcome"
				echo "<meta http-equiv=\"Refresh\" content=\"2; index.html\">";
			}
	
		?>
	</body>
</html>