<?php

header("Content-type: text/html; charset=utf-8"); 

$agent = null;
$agent = $_SERVER['HTTP_USER_AGENT'];
//echo $agent;

if(empty($agent)) echo "get agent error";

else if(strpos($agent,"AlipayClient")) skipAlipay();

else if(strpos($agent,"MicroMessenger")) skipMicroMessenger();

else if(strpos($agent,"QQ")){  if(strpos($agent,"Pixel")) skipQQ();}

else {echo "0";}

function skipAlipay(){

	echo "
	<!DOCTYPE HTML>
		<html>
		<head>
		<title>选择用户支付</title>
		<style>*{margin:0px;}
		img{width:100%;height:auto;}
		</style>
		</head>
		<body>
		<a href='https://qr.alipay.com/tsx02420xsqfiusaadzpq0b'>15365696662</a><br>
		<a href='HTTPS://QR.ALIPAY.COM/TSX062447VXZFOYWJZD5D9'>13815575315</a><br>
		</body>
		</html>

	";
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
function skipQQ(){
	
	echo "
		<!DOCTYPE HTML>
			<html>
			<head>
			<title>QQ支付</title>
			<style>*{margin:0px;}
			img{width:100%;height:auto;}
			</style>
			</head>
			<body>
			<img src='qrcodeimg/qq_cx.jpg'>
			</body>
			</html>
		";	
		
}

?>