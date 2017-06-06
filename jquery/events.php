<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jquery Events</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#viewText').click(function(){
				var textvalue = $('#mytext').val();
				alert(textvalue);
			});
			

			/*$('#viewText').click(function(){
				alert($('#mytext').val());
			});
			$('#viewText').click();*/
			$('.myselect').changde(function(){
				//alert($('.myselect').val());
			});

			$('.myselect').change(function(){
				alert($(this).val());
			});

			$('#mytext').keyup(function(){
				// alert($(this).val());
				$('.dynamicVal').text($(this).val());
			});
		});
	</script>
</head>
<body>
	<input type="text" name="mytext" value="" id="mytext" />
	<input type="submit" name="submit" value="click me" id="viewText" />
	<input type="submit" name="submit" value="click me another" id="viewText" />

	<select class="myselect">
		<option value="one">One</option>
		<option value="two">Two</option>
		<option value="three">Three</option>
		<option value="four">Four</option>
		<option value="five">Five</option>
		<option value="six">Six</option>
	</select>
	<div class="dynamicVal">
		
	</div>
</body>
</html>