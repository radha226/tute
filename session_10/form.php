
<?php
if(isset($_POST['submit'])){

		$file=fopen("append.txt", "a");
		$content="\n".$_POST['add'];

		fwrite($file, $content);

		fclose($file);
}

?>
<form method="POST">
<input type="text" name="add"><br>
<input type="submit" name="submit">
</form>

