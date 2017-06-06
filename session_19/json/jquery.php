<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.get('http://localhost/tute_p/session17/json/index.php', function(res){
				var myarray = {};
				myarray['one'] = 'Hello';
				console.log(myarray);
				var mynewarray = [];
				mynewarray.push(123);
				console.log(mynewarray[0]);
				var resultData = JSON.parse(res);
				console.log('123')
				var test = parseInt("123.25");
				console.log(test);
				console.log(resultData.five);
			});
		});
	</script>
</head>
<body>

</body>
</html>