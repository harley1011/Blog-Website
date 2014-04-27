<?php
require_once("headerlayout.php");

if ($_SERVER['REQUEST_METHOD'] =="POST" && isset($_POST['blogpost']))
{
	$blogpost = json_encode(array('userid'=>$_SESSION['userid'], 'email'=>$_SESSION['email'], 'blogpost'=>$_POST['blogpost'], 'timestamp'=>date('Y-m-d H:i:s'))) . PHP_EOL;
	$file = fopen("posts.txt",'a');
	fwrite($file, $blogpost);
	fclose($file);
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
