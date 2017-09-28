<?php header("Content-type: text/html; charset=utf-8");
   $username=$_GET["username"];
   $server=$_GET["server"];
if($server=="wx"){
	$servername="微信";
}else 
if($server=="qq"){
	$servername="QQ";
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>
        <?php
            echo $servername."支付";
        ?>
    </title>
    <link type='text/css' href='../css/style.css' rel='stylesheet'>
</head>
<body>

<?php
    echo "<img src='../qrcodeimg/".$username."/".$server."_".$username.".jpg' alt='当前未设置'>";
?>

</body>
</html>
