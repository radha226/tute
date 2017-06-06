<!DOCTYPE html>
<html>
<head>
	<title>Textbox Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#clickButton').click(function(){
				if($('input[name=mytext]').val().trim() == ''){
					$('#error').html('<b>Please Fill text</b>');
				}else{
					// $('#error').html('');
					alert($('input[name=mytext]').val());
				}
			});
			$('input[name=mytext]').keyup(function(){
				if($(this).val().trim() != ''){
					$('#error').html('');
				}
			});
		});
	</script>
</head>
<body>
	<input type="text" name="mytext" value="" /><br/>
	<span style="color: red; font-weight: 900;" id="error">
		
	</span>
	<br/>
	<input type="submit" name="mybutton" value="Click Me" id="clickButton" />
</body>
</html>