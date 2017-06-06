<?php
	
	function test($data,$a){
		echo "<pre/>";
		$result = call_user_func($data);
		print_r($result);
		echo $a;
	}

	test(function(){
		return [1,2,3,4];
	},10);
?>