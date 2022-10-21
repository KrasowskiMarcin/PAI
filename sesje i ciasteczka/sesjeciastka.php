<?php
session_start();
setcookie("StringCookie", "test string", time() + 3600, '/');
setcookie("IntCookie", 45, time() + 3600, '/');
?>
<!DOCTYPE html>
<html>
<body style="background-color:gray;">

<?php
// Set session variables
$_SESSION["string"] = "Zmienna tekstowa";
$_SESSION["int"] = 45;
echo "Session variables are set.";
?>

</body>
</html>