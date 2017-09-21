<?php
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$password=$_POST['password'];
require("cx.class.php");
$new1=new cx();
$new1->show();
$res=$new1->login($username,$password);
if($res==true){
	session_start();
	$_SESSION['user']=$username;
	echo $_SESSION['user'];
}else{
	echo "<a href='/index.php'>error</a>";
}
?>