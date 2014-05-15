<?php 


$con=mysqli_connect("localhost:3306","root","","mynewdatabase");

if (mysqli_connect_errno()) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$query = "SELECT * FROM posts";
	$postsArray = array();

	if ($result = mysqli_query($con, $query))  {
	while ($row = mysqli_fetch_assoc($result))
	array_push($postsArray,$row);
	}
	echo json_encode($postsArray);
?> 