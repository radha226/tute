<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery Events</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('input[name=mytext]').keyup(function(e){
				if(e.keyCode == 13){
					// $('.content').html('<br/>'+$(this).val());
					$('.content').prepend('<br/>'+$(this).val());
					// $('.content').append('<br/>'+$(this).val());
					$(this).val('');
				}
				// alert(e.keyCode);
				//$('.content').html($(this).val());
			});

			var myarray = [1,2,3,4,5,6];
			$.each(myarray, function(key, val){
				console.log(val);
			});
		});
	</script>
</head>
<body>
	<input type="text" name="mytext" value="" /><br/>
	<!-- <input type="submit" name="submitbutton" value="Click Me" /> -->
	<div class="content">
		
	</div>
</body>
</html>