<?php
session_start();
?>
<html>
<body>
<?php
echo $_SESSION["name"]="raj";

?>
</body>
</html>
<?php
session_unset();		=> it destroy a single session variable;
unset($_SESSION["name"]);
session_destroy();    => it destroy a whole session
?>