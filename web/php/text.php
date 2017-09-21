<?php
$id=$_GET['id'];
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
	<?php
		echo $content[$id][2];
	?>
</title>
</head>

<body>
<div class="header">
	<p><a href="list.php"><img src="images/button_03.png" class="left"/></a>
	<span>
		<?php echo $content[$id][2];?>
	</span>
	<a href=""><img src="images/button_05.png" class="right"/></a>
	</p>
</div>

<div class="text">

<p class="center">
	<?php echo $content[$id][2];?><br />
	<span><?php echo $content[$id][4];?><br /> 来源：<?php echo $content[$id][1];?></span>
</p>

<P>
	<?php echo $content[$id][3];?>
</p>
    




</div>



 <div class="foot"><p>技术支持：xx</p></div>
</body>
</html>
