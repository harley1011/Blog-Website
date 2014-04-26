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
	require_once("forms/postform.php")
?>

<script>
function refresh(){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
alert("ss");

 xmlhttp.onreadystatechange=function()
  {
  	if (xmlhttp.readystate == 4 && xmlhttp.status== 200)
  	{
  		alert("ni");
  		xmlDoc = xmlhttp.responseText;
  		alert(xmlDoc);
  	}
  }
xmlhttp.open("GET","getblogpost.php",true);
xmlhttp.send();
}
</script>
<button type="button" onclick="refresh()">Refresh</p>
<?php require_once("footerlayout.php");
?>
