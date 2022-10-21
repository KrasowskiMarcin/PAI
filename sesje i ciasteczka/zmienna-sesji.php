<?php
session_start();
if(isset($_SESSION)){
setcookie("StringCookie", array("cookieString", 432), time() + 3600, '/');
setcookie("IntCookie", "", time() - 3600, '/');	
}
?>
<!DOCTYPE html>
<html>
<body style="background-color:gray;">

<form action="./zmienna-sesji.php" method="POST">
<input type="submit" value="Usuń sesję" name="delete"/>
</form>
<?php
echo "Srting: ".$_SESSION["string"]."<br>";
echo "Int: ".$_SESSION["int"]."<br>";
if(isset($_COOKIE["StringCookie"]) && isset($_COOKIE["IntCookie"]) ){
	echo "String cookie: ".$_COOKIE["StringCookie"]."<br>";
	echo "Int cookie: ".$_COOKIE["IntCookie"]."<br>";
}
if(isset($_POST['delete'])){
	session_destroy();
	echo "Usunięto zmienne";
	
}
?>
</body>
</html>