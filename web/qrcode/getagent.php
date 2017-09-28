<?php

$agent = null;
$agent = $_SERVER['HTTP_USER_AGENT'];
echo $agent;

if(empty($agent)) echo "get agent error";

?>