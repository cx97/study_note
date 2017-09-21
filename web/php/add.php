<?php

header("content-type:text/html;charset=utf-8");
require("php/cx.class.php");
$new1=new cx();
$new1->show();
$content=$new1->show();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"> 
<link rel="stylesheet" type="text/css" href="css/list.css"/>
<title>
  添加新闻
</title>
</head>

<body>
<div class="header">
  <p><a href="index.php"><img src="images/button_03.png" class="left"/></a>
  <span>
   添加新闻
  </span>
  <a href=""><img src="images/button_05.png" class="right"/></a>
  </p>
</div>

<div class="text">

<p class="center">

</p>
    
<form method="post" action="php/doadd.php">
	作者：<input type="text" name="witer"><br>
	标题：<input type="text" name="title"><br>
	内容：<input type="text" name="content"><br>
	<input type="submit" name="">
</form>



</div>



 <div class="foot"><p>技术支持：xx</p></div>
</body>
</html>
