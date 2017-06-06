<?php
	
	$ch = curl_init();
	$curlConfig = array(
	    CURLOPT_URL            => "http://cricscore-api.appspot.com/csa",
	    CURLOPT_RETURNTRANSFER => true,
	   // CURLOPT_SSL_VERIFYPEER => false
	);
	curl_setopt_array($ch, $curlConfig);
	$result = curl_exec($ch);
	curl_close($ch);

	echo "<pre/>";
	//print_r(json_decode($result));
	//print_r($result);
	echo "<br/><br/>";
	//exit;


	$ch = curl_init();
	$curlConfig = array(
    CURLOPT_URL            => "http://cricscore-api.appspot.com/csa?id=597924",
    CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($ch, $curlConfig);
	$result = curl_exec($ch);
	curl_close($ch);

	print_r(json_decode($result));
	//exit;
?>

	<?php
		$uu=file_get_contents("https://cricscore-api.appspot.com/csa");
		echo "<pre>";
		//print_r(json_decode($uu));

	?>