<?php
require ("doAlipay.php");
require ("doMicroMessengerAndQQ.php");
function doAgent($username){
    header("Content-type: text/html; charset=utf-8");
    $agent = $_SERVER['HTTP_USER_AGENT'];
//echo $agent;

    if(empty($agent)) echo "get agent error";

    else if(strpos($agent,"AlipayClient")) skipAlipay($username);

    else if(strpos($agent,"MicroMessenger")) skipMicroMessengerAndQQ("wx",$username);

    else if(strpos($agent,"QQ")){  if(strpos($agent,"Pixel")) skipMicroMessengerAndQQ("qq",$username);}

    else cx();
}
function cx(){
    echo "000";
}

function skipAlipay($username){
	Header("Location:".getAlipay($username).""); 
}

function skipMicroMessengerAndQQ($server,$username){

    header("location:".getMicroMessengerAndQQ($server,$username)."");

}
