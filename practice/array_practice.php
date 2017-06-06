<h4>simple array</h4>
<?php
$a=array(3,4,"hii");
echo "<pre>";
print_r($a);

?>

<h4>array with foreach</h4>
<?php
	$b=["h=>hii", "w=>world"];
	//  $bb=count($b);
	// print_r($b);
	foreach ($b as $key => $value) {
		echo $value."<br>";
		echo $key."<Br>";
	}
?>

<h4>array with forloop</h4>
<?php
	$c=array("hii","world");
	
	for($i=0; $i< count($c); $i++){
		echo $c[$i]."<br>";
	}
?>


<h4>associative array</h4>
<?php
$d=array("2"=>"hii", "5"=>"dd");
foreach ($d as $key => $value) {
	echo "value"."="."$value"."<br>";
	echo "<pre>"."<Br>";
	print_r($value);
}

?>

// <?php
$myarray = array(
                        1,2,3,4,
                        array('one','two','three','four',array(1,2,3,4)),
                        array('o','t','f',5,6),
                        array(array('one'=>1,'two'=>2,3))
                    );
  
            for($i=0; $i < count($myarray); $i++){
                if(is_array($myarray[$i])){
                        for($j=0; $j<count($myarray[$i]); $j++){
                            if(is_array($myarray[$i][$j])){
                               foreach($myarray[$i][$j] as $key => $val){
                                   echo $key."=>".$val."<br>";
                               }
                            }
                            else{
                                echo $myarray[$i][$j]."<br>";
                            }
                        }
                }else{
                    echo $myarray[$i]."<br>";   
                }
            }



?>