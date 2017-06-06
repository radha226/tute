<?php


 class db{

 	private $db;

 	function __construct(){

 		$this->db =  new PDO('mysql:host=localhost;dbname=tute','root','');
 	}

 	function testCon(){

 		
 		if(isset($_POST['submit'])){
 			// $query = $this->db->prepare('select * from practice');
		echo "<pre/>";
		print_r($_POST);
			$columns = [];
		
		$query ='CREATE TABLE practice1(';
	
		for($i=0;$i<count($_POST['columnName']); $i++){

			$columnCreate = $_POST['columnName'][$i].' '.$_POST['colType'][$i].'('.$_POST['columnLengt'][$i].')';

			if(!isset($_POST['alloNull'][$i])){

				$columnCreate .= ' NOT NULL';
			}

			if(isset($_POST['primaryKey'][$i])){
				$columnCreate .= ' PRIMARY KEY';
			}
			if(isset($_POST['autoInc'][$i])){

				$columnCreate .= ' AUTO_INCREMENT';
			}

			if($_POST['defaulValue'][$i] != '' && $_POST['defaulValue'] != null){

				$columnCreate .= " DEFAULT '".$_POST['defaulValue'][$i]."'";
			}
			$columns[] = $columnCreate;

		}

		$query .= implode(',',$columns);

		$query .= ');';
			echo $query;
	// );
		$execQuery = $this->db->prepare($query);
		$execQuery->execute();


	}
 		

 		
 		// print_r($query->fetchAll(PDO::FETCH_ASSOC));
 		// print_r($query->fetchObject());
 	}
 }


 $obj = new db;

 $obj->testCon();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Table</title>
</head>
<body>
	<form method="POST">
		<table border="1" style="margin: 0 auto; width: 80%;">
			<tr>
				<td>Column Name</td>
				<td>Column Length</td>
				<td>Column Type</td>
				<td>Allow Null</td>
				<td>Default</td>
				<td>Primary Key</td>
				<td>Auto Increment</td>
			</tr>
			<tr>
				<td><input type="text" name="columnName[]" /></td>
				<td><input type="text" name="columnLengt[]" /></td>
				<td>
					<select name="colType[]">
						<option></option>
						<option value="INT">Integer</option>
						<option value="VARCHAR">Varchar</option>
					</select>
				</td>
				<td><input type="checkbox" name="alloNull[0]"></td>
				<td><input type="text" name="defaulValue[]" value="" /></td>
				<td><input type="checkbox" name="primaryKey[0]"></td>
				<td><input type="checkbox" name="autoInc[0]"></td>
			</tr>

			<tr>
				<td><input type="text" name="columnName[]" /></td>
				<td><input type="text" name="columnLengt[]" /></td>
				<td>
					<select name="colType[]">
						<option></option>
						<option value="INT">Integer</option>
						<option value="VARCHAR">Varchar</option>
					</select>
				</td>
				<td><input type="checkbox" name="alloNull[1]"></td>
				<td><input type="text" name="defaulValue[]" value="" /></td>
				<td><input type="checkbox" name="primaryKey[1]"></td>
				<td><input type="checkbox" name="autoInc[1]"></td>
			</tr>

			<tr>
				<td><input type="text" name="columnName[]" /></td>
				<td><input type="text" name="columnLengt[]" /></td>
				<td>
					<select name="colType[]">
						<option></option>
						<option value="INT">Integer</option>
						<option value="VARCHAR">Varchar</option>
					</select>
				</td>
				<td><input type="checkbox" name="alloNull[2]"></td>
				<td><input type="text" name="defaulValue[]" value="" /></td>
				<td><input type="checkbox" name="primaryKey[2]"></td>
				<td><input type="checkbox" name="autoInc[2]"></td>
			</tr>

			<tr>
				<td><input type="text" name="columnName[]" /></td>
				<td><input type="text" name="columnLengt[]" /></td>
				<td>
					<select name="colType[]">
						<option></option>
						<option value="INT">Integer</option>
						<option value="VARCHAR">Varchar</option>
					</select>
				</td>
				<td><input type="checkbox" name="alloNull[3]"></td>
				<td><input type="text" name="defaulValue[]" value="" /></td>
				<td><input type="checkbox" name="primaryKey[3]"></td>
				<td><input type="checkbox" name="autoInc[3]"></td>
			</tr>
			<tr>
				<td colspan="7">
					<input type="submit" name="submit" value="Create" />
				</td>
			</tr>


		</table>
	</form>
</body>
</html>