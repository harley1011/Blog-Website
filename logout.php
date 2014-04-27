<?php 
 session_start();
unset($_SESSION['email']);
unset($_SESSION['userid']);
require_once("headerlayout.php");
echo '<p>You have logged out</p>';

require_once("footerlayout.php"); ?>