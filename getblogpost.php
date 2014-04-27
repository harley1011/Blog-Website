<?php 
$file = fopen("posts.txt",'r');
$postsArray = array();
$size = 0;
while (($buffer = fgets($file)) != false)
{
	$temp = json_decode($buffer);
	$postsArray[$size++] = json_decode($buffer);

}
echo json_encode($postsArray);

?> 