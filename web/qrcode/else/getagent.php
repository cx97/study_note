<?php

$agent = null;
$agent = $_SERVER['HTTP_USER_AGENT'];
echo $agent;

if(empty($agent)) echo "get agent error";
else if(strpos($agent,"MQQBrowser")) echo "qq";
else echo "no qq";
?>