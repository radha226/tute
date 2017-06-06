<!DOCTYPE html>
<html>
<head>
	<title>My Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// alert('Working');
			// console.log('Working Fine');
			console.log($('.mytext').html());
			console.log($('.mytext').text());
			$('.mytext').html('<b>Hey, this is HTML function!</b>');
			console.log($('.mytext').html());
			$('.mytext').click(function(){
				alert('You Clicked!!');
			});
			$('#myInput').click(function(){
				// $('.mytext').fadeOut(800);
				// $('.mytext').hide(800);
				$('.mytext').slideUp(800);
				// alert('You clicked on button!');
			});
			$('#showDiv').click(function(){
				$('.mytext').slideDown(800);
				// $('.mytext').show(800);
				// $('.mytext').fadeIn(800);
			});
		});
	</script>
</head>
<body>
	<div class="mytext">
		<b>Hello world!!</b>
	</div>

	<input type="submit" name="button" value="Click Me" id="myInput" />
	<input type="submit" name="button" value="Show Div" id="showDiv" />
</body>
</html>