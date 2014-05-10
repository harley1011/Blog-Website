<?php
require_once("headerlayout.php");

if ($_SERVER['REQUEST_METHOD'] =="POST" && isset($_POST['blogpost']))
{
	$con=mysqli_connect("localhost:3306","root","","mynewdatabase");
	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$userid = mysqli_real_escape_string($con, $_SESSION['userid']);
	$email = mysqli_real_escape_string($con, $_SESSION['email']);
	$description = mysqli_real_escape_string($con, $_POST['blogpost']);
	$date = mysqli_real_escape_string($con, date('Y-m-d H:i:s'));
	$sql="INSERT INTO posts (id_user, email, description, time_stamp) VALUES ('$userid', '$email', '$description', '$date')";
	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}
	mysqli_close($con);

}


if (isset($_SESSION['userid']))
	require_once("forms/postform.php");
else
	echo "<a href='login.php'>Login to post</a>";

?>

<div id="blogpostdiv">
</div>
<script type="text/javascript" src="javascript/getblogposts.js">
</script>

<?php require_once("footerlayout.php");
?>
