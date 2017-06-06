<?php

	/*@$dom = new DOMDocument();
	@$dom->loadHTMLFile('http://money.cnn.com/news/india');
	$links = $dom->getElementsByTagName('ul');
	echo "<pre/>";
	//print_r($links->childNodes);
	// exit;
	foreach($links as $link){
		
		foreach($link->childNodes as $val){
			echo $link->ownerDocument->saveHTML($link)	."<br/>";
		}
		

	}*/

	$curl = curl_init('http://money.cnn.com/news/india');
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$contents = curl_exec($curl);
	curl_close($curl);
	echo "<pre/>";
	// print_r($contents);
	$ul = explode('<ul class="row two-equal-columns js-river" data-vr-zone="River">', $contents);
	print_r($ul[1]);
	exit;
	$li = explode('<li class="column" data-vr-contentbox="">',$ul[1]);
	print_r($li[0]);
	exit;
	foreach($li as $key => $val){

		print_r($val);
		exit;
	}


	// echo "<pre/>";
	// var_dump($links);

	// http://money.cnn.com/news/india

?>