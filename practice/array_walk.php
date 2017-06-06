
<h1>array_walk_recursion</h1>
<?php
$h=array(1,2,3,4,5);
$j=array($h,2,3);
//print_r($j);
function mycase($ke,$val){

	echo $ke."<Br>";

	print_r($val)."<br>";
	
	
}
array_walk_recursive($j, "mycase");
//echo $a;
?>

<Br><BR>






