<?php require_once("headerlayout.php"); 
if($_SERVER['REQUEST_METHOD'] =="GET" )
{
	require_once("forms/registerform.php");
}
else
{
	$con=mysqli_connect("localhost:3306","root","","mynewdatabase");
	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);
	$sql="INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$pass')";
	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}
	echo "User registered";
	mysqli_close($con);
}
require_once("footerlayout.php"); ?>