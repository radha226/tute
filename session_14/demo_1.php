<?php
session_start();
?>
<html>

<body>
<?php

echo $_SESSION["name"]="ramesh";
print_r($_SESSION);
?>
</body>
</html>