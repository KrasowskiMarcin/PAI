<?php
session_start();
$array = array("cookieString", 45);
setcookie("table", json_encode($array), time() + 3600, '/');
?>
<!DOCTYPE html>
<html>
<body style="background-color:gray;">

<?php
// Set session variables
$_SESSION["array"] = array("tekst", 45);
echo "Session variables are set.";
?>

</body>
</html>