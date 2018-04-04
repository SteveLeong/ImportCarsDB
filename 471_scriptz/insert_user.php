<?php
$name="mike";
$age=21;
$sex="male";
$email="mike11@yahoo.com";
$address="123 Mike Lane";
echo "Adding user $name to the database<br>";

//create connection
$con=mysqli.connect("localhost","root","47120","cardb");

//check connection
if (mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql="INSERT INTO User (Name, Age, Sex, Email, Address) VALUES ('".$name."','".$age."','".$sex."','".$email."','".$address."')";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error($con));
	}
else
	echo "1 user added";
	
mysqli_close($con);
?>
	
