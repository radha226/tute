<?php
	include_once "class.Thumbnail.php";
	$var=new Thumbnail("sample.jpg",0,0,50,75);
	$var->show();
	$var->save("images/testing.jpg");

?>
