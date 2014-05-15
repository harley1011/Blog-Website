<?php
require_once("headerlayout.php");


if ($_SERVER['REQUEST_METHOD'] =="POST" )
{
	$con=mysqli_connect("localhost:3306","root","","mynewdatabase");
	if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  	$userid = mysqli_real_escape_string($con, $_SESSION['userid']);
	  	$newFirstName = mysqli_real_escape_string($con, $_POST['firstName']);
	  	$newLastName = mysqli_real_escape_string($con, $_POST['lastName']);
	  	$newEmail = mysqli_real_escape_string($con, $_POST['email']);
	  	$newPassword = mysqli_real_escape_string($con, $_POST['newPassword']);
		mysqli_query($con,"UPDATE users SET firstname='$newFirstName' , lastname='$newLastName' , email='$newEmail' WHERE id_user='$userid'");

	echo '<p> Account updated! </p>';

}
else
{
	$con=mysqli_connect("localhost:3306","root","","mynewdatabase");

	if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  	$userid = mysqli_real_escape_string($con, $_SESSION['userid']);
		$result = mysqli_query($con,"SELECT * FROM users WHERE '$userid'");
		$row = mysqli_fetch_array($result);

		$firstName = $row['firstname'];
		$lastName = $row['lastname'];
		$email = $row['email'];
		$password = $row['password'];

	require_once("forms/profileform.php");
}

require_once("footerlayout.php");
?>