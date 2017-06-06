<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<?php


	$ch = curl_init();
	$curlConfig = array(
	    CURLOPT_URL            => "http://zeenews.india.com/asia",
	    CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($ch, $curlConfig);
	$result = curl_exec($ch);
	curl_close($ch);

	 $list = explode('<div class="view-content">',$result);
	
	print_r($list[1]);
	

?>

<script type="text/javascript">
	$(document).ready(function(){
		var desc = [];
		var titles = [];
		var images = [];
		$('.lead-health-nw').each(function(){
			titles.push($(this).find('a').text());
			desc.push($(this).find('p').text());
			if($(this).find('img').attr('src') != undefined){
				images.push($(this).find('img').attr('src'));
			}else{
				images.push('No image');
			}
			
		});
		setTimeout(function(){
			console.log(titles);
			console.log(desc);
			console.log(images);
			
		},5000);
	});
</script>