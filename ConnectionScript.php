<?php
	$con=mysqli_connect("localhost","root","47120"."cardb");
	if (mysqli_connect_errno($con))
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
?>