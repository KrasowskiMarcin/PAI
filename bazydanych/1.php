<html>
<body>
	<center>
		<form action="./index.php" method="POST">
			<p>Login: </p>
			<p><input type="text" name="login"/></p>
			<p>Haslo: </p>
			<p><input type="password" name="passwd"/></p>
			<p> Zapamiętaj mnie: </p>
			<input type="checkbox" name="remember" value=1 />Tak
			<input type="checkbox" name="remember" value=2 />Nie
			<p><input type="submit" /></p>
		</form>
	</center>
</body>
</html>

<?php
$hostname = 'localhost';
$databse = 'bd';
$username = 'root';
$password = '';
if(isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['remember'])){
	$imie = $_POST['login'];
	$nazwisko = $_POST['passwd'];
	$remember = $_POST['remember'];
	
	$conn = mysqli_connect($hostname, $username, $password, $databse);
	
	
	$Adres_email = "jakubpiskorowski@gmail.com";

	$sql = "INSERT INTO `klient`(`id`,`Imie`, `Nazwisko`, `Adres_email`, `remember`)
	VALUES (NULL, '$imie', '$nazwisko','$Adres_email', '$remember')";
	if($result = mysqli_query($conn, $sql)) echo "Dodano mistrza <br>";
	else echo "Nie udało się dodać mistrza";

	$query = "SELECT * FROM klient";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
		echo $row['id'].' '.$row['Imie'].' '.$row['Nazwisko'].' '.$row['Adres_email'].' '.$row['remember'];
		echo '<br>';
	}
}



?>