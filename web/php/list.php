<?php
header("content-type:text/html;charset=utf-8");
require("php/cx.class.php");
$new1=new cx();
$new1->show();
$content=$new1->show();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" type="text/css" href="css/list.css">
<title>人社服务_通知通告</title>
</head>

<body>

<div class="header"><p><a href="index.php"><img src="images/button_03.png" class="left"/></a><span>通知通告</span><a href=""><img src="images/button_05.png" class="right"/></a></p></div>

<div class="list">
     <ul>
          <?php
              for ($i=0; $i <count($content) ; $i++) { 
                echo "<li><a href='text.php?id=".$i."'><p>".$content[$i][2]."&nbsp; <span>".$content[$i][4]."</span></p></a></li>";
              }
              
          ?>
           

          <?php
          /*
           <li><a href="text.php"><p>我市2016年下半年大众创业...&nbsp; <span>2016-5-06</span></p></a></li>
           <li><a href="text.php"><p>我市2016年下半年大众创业...&nbsp; <span>2016-5-06</span></p></a></li>
           <li><a href="text.php"><p>我市2016年下半年大众创业...&nbsp; <span>2016-5-06</span></p></a></li>
           <li><a href="text.php"><p>我市2016年下半年大众创业...&nbsp; <span>2016-5-06</span></p></a></li>
           <li><a href="text.php"><p>我市2016年下半年大众创业...&nbsp; <span>2016-5-06</span></p></a></li>
           <li><a href="text.php"><p>我市2016年下半年大众创业...&nbsp; <span>2016-5-06</span></p></a></li>
           <li><a href="text.php"><p>我市2016年下半年大众创业...&nbsp; <span>2016-5-06</span></p></a></li>
           */
           ?>


     </ul>
</div>


 <div class="foot"><p>技术支持：xx</p></div>
</body>
</html>
