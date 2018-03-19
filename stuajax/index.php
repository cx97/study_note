<?php
	$con = mysqli_connect('localhost','root','','db_by');
	$res = mysqli_query($con,'SELECT * FROM news');
	$len = mysqli_num_rows($res);
	$row = array();
	for ($i = 0; $i < $len; $i++) {
		array_push($row,mysqli_fetch_object($res));
	}
	echo json_encode($row);
