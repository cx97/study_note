<?php
require("cx.class.php");
$new1=new cx();
$new1->show();
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link type="text/css" rel="stylesheet" href="register.css" />
	<script type="text/javascript" src="register.js"></script>
</head>
<body>
<div id="header"><img src="images/register_logo.gif" alt="logo"/></div>
<div id="main">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="bg bg_top_left"></td>
    <td class="bg_top"></td>
    <td class="bg bg_top_right"></td>
  </tr>
  <tr>
    <td class="bg_left"></td>
    <td class="content">
      <form action="login.php" method="post" name="myform" onsubmit="return checkForm()">
        <dl>
          <dt>通行证用户名：</dt>
          <dd><input name="username" type="text" id="userName" class="inputs userWidth" onfocus="userNameFocus()" onblur="userNameBlur()" /></dd>
          <div id="userNameId"></div>
        </dl>
         <dl>
          <dt>登录密码：</dt>
          <dd><input type="password" name="password" id="pwd" class="inputs"  onfocus="pwdFocus()" onblur="pwdBlur()"/></dd>
          <div id="pwdId"></div>
        </dl>

        <dl>
          <dt>性别：</dt>
          <dd><input name="sex" type="radio" value="" checked="checked"/>男 <input name="sex" type="radio" value="" />女 </dd>
        </dl>

        <dl>
          <dt></dt>
          <dd><input name=" " type="image" src="images/button.gif"/></dd>
        </dl>
      </form>
    </td>
    <td class="bg_right"></td>
  </tr>
  <tr>
     <td class="bg bg_end_left"></td>
    <td class="bg_end"></td>
    <td class="bg bg_end_right"></td>
  </tr>
</table>

</div>
</body>


</html>