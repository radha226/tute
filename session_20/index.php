<?php
	$myarray='[{"type":"text","name":"first_name","value":"","attr":{"placeholder":"Please enter first name","class":"firstName"}},{"type":"text","name":"last_name","value":"","attr":{"placeholder":"Please enter last name"}},{"type":"select","name":"state","options":{"punjab":"Punjab","hariyana":"Hariyana","delhi":"Delhi"}},{"type":"select","name":"city","options":{"asr":"Amritsar","jal":"Jalandhar","ldh":"Ludhiana"}},{"type":"checkbox","name":"products","options":{"prod1":"Product 1","prod2":"Product 2","prod3":"Product 3"}},{"type":"file","name":"myfile"},{"type":"textarea","name":"address","value":"","attr":{"placeholder":"Please Enter Address"}}]';

	$result=json_decode($myarray,true);
	echo "<pre>";
	//print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>json</title>
</head>
<body>
	
	<form >
		<?php
			foreach($result as $key => $value):
				//print_r ($key);
				//print_r($value);
				switch($value['type']):
					case'text':
		?>
				<label><?=$value['name'] ?></label> <input type="text" value="" placeholder="<?=@$value['attr']['placeholder']?>" name="<?=$value['name']?>" />
		<?php
					break;
					case'select':
		?>		
				<label><?=$value['name'] ?>
				<select name="<?=$value['name']?>">
					<?php
						foreach($value['options'] as $k => $v):

					?>
							<option value="<?=$k?>"><?=$v?></option>
					<?php
						endforeach;
					?>
				</select></label> 
		<?php
					break;
					case'checkbox':
						foreach($value['options'] as $k => $v):
		?>
							<label><input type="checkbox" name="<?=$k?>" value="<?=$v?>" /> <?=$v?></label>


		<?php
						endforeach;
					break;
					case'textarea':
		?>
			<label><?=$value['name'] ?>
			<textarea cols="25" rows="5"></textarea></label>	
		<?php
				break;
				endswitch;
			endforeach;
		?>
	</form>
</body>
</html>

