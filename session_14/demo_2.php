<?php
	session_start();
?>
<html>
<body>
<?php
	echo $_SESSION['name']="radha";
	//print_r($_SESSION);
	

?>
</body>

</html>
<?php
	session_unset();
	session_destroy();
?>