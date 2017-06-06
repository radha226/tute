<h5>constant</h5>
<?php
	define("cns","hii this is constant");
	echo cns;
?>

<h5>table of 2 nd 3</h5>
<?php
	$number=2;
	$max=10;
		for($i=1; $i<=10; $i++){

			if($i%2){
				$even=$i;
				$tab=2;

			}
			else{
				$add =$i;
				$tab=3;
			}
			echo $tab."*".$i."=".$tab*$i."<Br>";
		}

?>


<h5>stars print</h5>
<?php
for($i=1; $i<=5; $i++){
	for($j=$i; $j<=5; $j++){

		echo "*";
	}

	echo "<br>";
}
?>

<h5>reverse star print</h5>
<?php
	for($ii=1; $ii<=5; $ii++){
		for($jj=1; $jj<= $ii; $jj++){
			echo "*";

		}
		echo "<br>";
	}

?>
<h5>array with for loop</h5>
<?php
	$array=[4, 6, "hii"];
	for($i=0; $i<count($array); $i++){
		echo $array[$i]."<Br>";
		echo "<pre>";
		print_r($array);

	}


?>

<h5>array with foreach loop</h5>
<?php
$array= array("1"=>"hii", "2"=>"world");
foreach ($array as $key => $value) {
	echo $value."<Br>";
}

?>

<h5>explode</h5>
<?php
	$array="hii, who, are, you";
	 $resul=explode(",", $array);

	echo "<pre>";
	print_r($resul);
?>

<h5>implode</h5>
<?php
	$array=array("hii", "world","5");
	echo implode(",", $array);

?>

