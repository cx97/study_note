<?php
$witer=$_POST['witer'];
$title=$_POST['title'];
$content=$_POST['content'];

if ($witer!=null and $title!=null and $content!=null) {
	require("cx.class.php");
	$new1=new cx();
	$new1->addcontent($witer,$title,$content);
}
else
{
	echo "<a href='/index.php'>error</a>";
}


?>