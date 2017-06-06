<html>
	<title></title>
	<body>

	<?php
		if(isset($_POST['submit'])){
			$radio=$_POST['color'];
			echo $radio;

			// $a=$_POST['type'];
			// foreach ($a as $key => $value) {
			// 	echo $value."<br>";
			// }

			
foreach($_POST['type'] as $selected){
echo $selected."</br>";
}

		}
		
	?>
	<form action="" method="POST">
		<table style="border:1px solid black;">
		<tr>
			
			<td>
				<select name="color">
  <option  value="varchar">aaa</option>
  <option value="saab">Saab</option>
  <option  value="mercedes">Mercedes</option>
  <option  value="audi">Audi</option>
</select>

			</td>
			<td><input type="checkbox" name="type[]" value="a"></td>
			<td><input type="checkbox" name="type[]" value="b"></td>
			<td><input type="checkbox" name="type[]" value="c"></td>
		
			<td><input type="checkbox" name="type[]" value="d"></td>

			</tr>
			<tr>
			<td><input type="submit" name="submit" value="save"></td>
			<tr>

			<tr>
		</table>


	</form>

	</body>

</html>