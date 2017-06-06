<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//alert('Working');
			// alert($('.mytext').text());
			// console.log($('.mytext').html());
			var test = 'Hello World';
			console.log(test);
			// alert(test);
			var myobject = {

				one:'This is one',
				two: 'This is two'
			};
			myobject['three'] = 'Hey';
			var myarray = [1,2,3,4,5];
			myarray.push(6);

			console.log(myobject);
			console.log(myarray);

			var htmlData = $('.mytext').html();
			alert(htmlData);
		});
	</script>
</head>
<body>
	<div class="mytext">
		<h1>Hello World!</h1>
	</div>

	<div class="mytext">
		<h1>Hello Worldsss!</h1>
	</div>

	<div id="mytest">
		<h2>This is ID Selector</h2>
	</div>

	<div id="mytest">
		<h2>This is ID Selector Second</h2>
	</div>

	<select class="myselect">
		<option value="one">One</option>
		<option value="two">Two</option>
		<option value="three">Three</option>
		<option value="four">Four</option>
		<option value="five">Five</option>
		<option value="six">Six</option>
	</select>s
</body>
</html>