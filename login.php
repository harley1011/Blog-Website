<?php require_once("headerlayout.php");

if($_SERVER['REQUEST_METHOD'] =="GET" )
{
	require_once("forms/loginform.php");
}
else
{
	$con=mysqli_connect("localhost:3306","root","","mynewdatabase");

	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password'");
	$row = mysqli_fetch_array($result);
	if (isset($row['id_user']))
	{
		echo "<p>Welcome back " . $row['firstname'] . "</p>";
		$_SESSION['userid'] = $row['id_user'];
		$_SESSION['email'] = $row['email'];
	}
	else
	{
		require_once("forms/loginform.php");
		echo "Invalid account information.";
	}
	mysqli_close($con);

} ?>
<div>


<a href="register.php">Register</a>

</div>
<?php require_once("footerlayout.php"); ?>