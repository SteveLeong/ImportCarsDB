<?php
$vin=1023123;
$price=2500;
$type="sedan";
$year=2005
$model="Speedster";
echo "Adding car $model $year to the database";

//create connection
$con=mysqli.connect("localhost","root","47120","cardb");

//check connection
if (mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql="INSERT INTO Car (VIN, Price, Type, Year, Mileage, Model) VALUES ('".$vin."','".$price."','".$type."','".$year."','".$model."')";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error($con));
	}
else
	echo "1 car added";
	
mysqli_close($con);
?>