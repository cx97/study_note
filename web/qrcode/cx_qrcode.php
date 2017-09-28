<?php

$agent = null;
$agent = $_SERVER['HTTP_USER_AGENT'];
//echo $agent;

if(empty($agent)) echo "get agent error";

else if(strpos($agent,"Alipay")) skipAlipay();

else if(strpos($agent,"MicroMessenger")) skipMicroMessenger();

else {echo "0";}

function skipAlipay(){
	Header("Location:https://qr.alipay.com/tsx02420xsqfiusaadzpq0b"); 
}

function skipMicroMessenger(){
	
	echo "
		<!DOCTYPE HTML>
			<html>
			<head>
			<title>微信支付</title>
			<style>*{margin:0px;}
			img{width:100%;height:auto;}
			</style>
			</head>
			<body>
			<img src='qrcodeimg/wx_cx.jpg'>
			</body>
			</html>
			
		";	
		
}

?>