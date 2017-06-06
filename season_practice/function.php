<h5>function</h5>
<?php
	function test(){
		echo "hii i m testing";
	}
	function test_parameter($a, $b){
		return $a*$b;
	}
	

	 test();
	 echo "<br/> ";
	 echo test_parameter(3,4);

?>


<h5>function refrence</h5>
<!-- //problm -->
<?php
$h=3;
function ref(&$x){

	echo $x;
	$x=6;
	
}
	ref($h);
	echo "<br>";
	echo $h;
?>