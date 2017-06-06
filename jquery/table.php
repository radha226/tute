<!DOCTYPE html>
<html>
<head>
	<title>My Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		// $(document).ready(function(){
		// 	for($i=1; $i<=10;$i++){
				
		// 		console.log('2'+'*'+$i+'='+(2*$i));
		// 	}
		// })

		$(document).ready(function(){
			for(var i=1; i<=10;i++){
				//console.log(2*$i);
				console.log('2'+'*'+i+'='+(2*i));
			}

			var myarray = [1,2,3,4,5,6];

			$.each(myarray, function(key,value){
				console.log(value);
			});
		});
	</script>
</head>
<body>
	
	</body>
</html>