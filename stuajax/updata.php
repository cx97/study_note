<?php
//UPDATE `news` SET `title` = 'title1', `slug` = 'slug1', `text` = 'text1' WHERE `news`.`id` = 1 ;
	$id = $_POST['id'];
	$title = $_POST['title'];
	$slug = $_POST['slug'];
	$text = $_POST['text'];

	$con = mysqli_connect('localhost','root','','db_by');
	$sql = "UPDATE `news` SET `title` = '".$title."', `slug` = '".$slug."', `text` = '".$text."' WHERE `news`.`id` = ".$id." ;";
	
	$res = mysqli_query($con,$sql);
	
	$aff = mysqli_affected_rows($con);

	if($aff == 1) {
		echo  "ok";
	}
	else {
		echo "error";
	}
	