<?php
	$file=fopen("read.txt", 'r');

	//print_r(fgets($file));
	while(!feof($file)){
		echo fgets($file);
	}



?>