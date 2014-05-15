<?php
if (session_id() === "") {
    session_start();
}

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/mystyle.CSS" />
</head>
<body>
<div id="page">
	<div id="header">
	<ul>
		<h1>Personal Blog</h1>
		<li><a href="index.php">HOME</a></li>
		<?php 
		if(isset($_SESSION['userid']))
			echo '<li><a href="logout.php">LOGOUT</a></li>';
		else
			echo '<li><a href="login.php">LOGIN</a></li>';
		?>
		<li><a href="profile.php">PROFILE</a></li>
		<li><a href="search.php">SEARCH</a></li>
		<li><a href="">USERS</a></li>
	</ul>
	</div>