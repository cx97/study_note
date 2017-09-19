<?php
require("cx.class.php");
$username=$_POST['username'];
$password=$_POST['password'];
$new1=new cx();
$ab=$new1->login($username,$password);
//$ab=$new1->login("coolman","199788");

if($ab==true){
	echo "login ok ";
}else{
	echo "error";
}