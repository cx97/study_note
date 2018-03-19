<?php

	$id = $_GET['id'];

	$con = mysqli_connect('localhost','root','','db_by');
	$sql = 'DELETE FROM `news` WHERE `news`.`id` = '."$id".' ;';
	$res = mysqli_query($con,$sql);
	
	$aff = mysqli_affected_rows($con);

	if($aff == 1) {
		echo  "ok";
	}
	else {
		echo "error";
	}