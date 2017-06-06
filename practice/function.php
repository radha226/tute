<h3>simple function </h3>
<?php
	$p=10;
	function test($p){
		echo $p. "<Br>"; 
	}
	test(15);
	echo  $p;
?>

<h3> function with parameter null </h3>

<?php
//function parameter($param1, $param2=null){  problm
	function parameter($param1, $param2 = null){
		$h=10;
		$param1 =$h;
		return $param1;
	}
	$result=parameter(19,30);
	echo $result;

	
?>



<h3>reference variable</h3>
<!--which variable is being refrenced  -->
<?php
$v=20;
	function testing(&$vvv){
		echo $vvv."<br>";
		$vvv=25;

	}
	testing($v);
	echo $v;

?>