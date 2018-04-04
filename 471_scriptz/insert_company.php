<?php
$name="Speed Motors";
$country_of_origin="Canada";
$date_started="04-03-2018";
$carname="Speedster";
echo "Adding car company $name to the database";

//create connection
$con=mysqli.connect("localhost","root","47120","cardb");

//check connection
if (mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql="INSERT INTO Company (Name, Country_Of_Origin, Date_Started, Cname) VALUES ('".$name."','".$country_of_origin."','".$date_started."','".$carname"')";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error($con));
	}
else
	echo "1 company added";
	
mysqli_close($con);
?>