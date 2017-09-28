<?php
function getAlipay($username){
    $json_string=file_get_contents('json/Alipay.json');
    $data = json_decode($json_string,true);
    $url= $data[$username];
    return $url;
}