<?php
$name="joey";
$degree="computer science";
$student_no=12311122;
echo "Adding admin $name to the database";

//create connection
$con=mysqli.connect("localhost","root","47120","cardb");

//check connection
if (mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql="INSERT INTO Admin (Name, Degree, Student_no) VALUES ('".$name."','".$degree."','".$student_no."')";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error($con));
	}
else
	echo "1 admin added";
	
mysqli_close($con);
?>