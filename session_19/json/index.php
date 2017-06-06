<?php
	
	$myarray = array(
						'one' => 'This is one',
						'two' => 'This is two',
						'three'	=>	'This is three',
						'four'	=>	'This is four',
						'five'	=>	array(
											1,2,3,4,5
										 )
					);

	// echo json_encode($myarray);
	$data = json_encode($myarray);
	echo "<pre/>";
	print_r(json_decode($data,true));
?>