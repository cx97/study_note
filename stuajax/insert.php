<?php

	$id = $_POST['id'];
	$title = $_POST['title'];
	$slug = $_POST['slug'];
	$text = $_POST['text'];
	$sql = "INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES ('".$id."', '".$title."', '".$slug."', '".$text."') ;";
	//echo $sql;
	$con = mysqli_connect('localhost','root','','db_by');
	$res = mysqli_query($con,$sql);
	
	$aff = mysqli_affected_rows($con);

	if($aff == 1) {
		echo  "ok";
	}
	else {
		echo "error";
	}
	