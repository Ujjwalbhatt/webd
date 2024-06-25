<!DOCTYPE html>
<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
session_unset();
session_destroy();
?>
</body>
</html>