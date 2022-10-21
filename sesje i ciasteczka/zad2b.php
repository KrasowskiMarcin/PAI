<?php
session_start();

if(isset($_POST['delete'])){
	setcookie("table", "", time() - 3600, '/');
}

if(isset($_POST['add']) && isset($_POST['var'])){
	$array = json_decode($_COOKIE['table']);
	array_push($array, $_POST['var']);
	setcookie("table", json_encode($array), time() + 3600, '/');
}
?>
<!DOCTYPE html>
<html>
<body style="background-color:gray;">

<form action="./zad2b.php" method="POST">
<input type="text" name="var"/>
<input type="submit" value="Usuń sesję" name="delete"/>
<input type="submit" value="Dodaj do tablicy" name="add"/>
</form>
<?php
//echo print_r($_SESSION["array"]);
echo "<br>";

echo "Cookie array: <br>";
echo print_r(json_decode($_COOKIE['table']));

if(isset($_POST['delete'])){
	session_destroy();
	echo "Usunięto zmienne";
}
if(isset($_POST['add']) && isset($_POST['var'])){
	array_push($_SESSION["array"],$_POST['var'] );
	echo "<br>";
	echo print_r($_SESSION["array"]);
	
	array_push($array,$_POST['var'] );
}

?>
</body>
</html>