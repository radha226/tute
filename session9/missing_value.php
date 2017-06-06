
<?php
if(isset($_POST['submit'])){

		$file=fopen("content.txt", "w");

		$cont=explode(".", $_POST['add']);
		echo("<pre>");
		print_r($cont); 
		$string = '';
		for($i=0; $i<count($cont); $i++){


			if($i != '4' && $i != '6'){
		
				//print_r($cont[$i]);
				$string.= $cont[$i].".";				
			}else{
				echo 'skip';
			}
			
		}
		fwrite($file, $string);
		fclose($file);
}

?>
<form method="POST">
<input type="text" name="add"><br>
<input type="submit" name="submit">
</form>

