<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<p>____________ZADANIE 4________________</p>
    <form action="./forms4&5.php" method="POST">
		<p> Imię </p>
		<p><input type="text" name="imie"/></p>
		<p>Nazwisko</p>
		<p><input type = "text" name="nazwisko"/></p>
		<input type = "radio" name="gender" value ="m"/>Mężczyzna
		<input type = "radio" name="gender" value ="k"/>Kobieta
		<p><input type = "submit"/></p>
    </form>
	<p>____________ZADANIE 5________________</p>
	<form action="./forms4&5.php" method="POST">
	<p> Gra: </p>
	<select name="game">
		<option value="Minecraft"> Minecraft </option>
		<option value ="Terraria"> Terraria </option>
		<option value="CSGO"> CS:GO </option>
	</select>
	<p> Ilość godzin: </p>
	<input type="number" name="hours"/>
	<p><input type="submit"/></p>
	</form>
        <?php
		
			//Zadanie 4
			if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['gender']) ){
				$imie = $_POST['imie'];
				$nazwisko = $_POST['nazwisko'];
				$gender = $_POST['gender'];
			}else{
				$imie = '';
				$nazwisko = '';
				$gender = '';
			}
			
			function greet($name, $surename, $plec){
				if($plec == 'm'){
					echo 'Witam Pana '.$name.'a';
				}else if($plec == 'k'){
					echo 'Witam Panią '.substr($name,0,-1).'ę';
				}else{
					return;
				}
			}
			
			greet($imie, $nazwisko, $gender);
			
			//Zadanie 5
			if(isset($_POST['game']) && isset($_POST['hours'])){
				$game = $_POST['game'];
				$hours = $_POST['hours'];
			}else{
				$game = '';
				$hours = '';
			}
			
			function howGoodAmI($gra, $hours){
				switch($gra){
					case("Minecraft"):
						echo 'W Minecraft';
						break;
					case("Terraria"):
						echo 'W Terraria';
						break;
					case("CSGO"):
						echo 'W CS:GO';
						break;
					default:
						echo '';
				}
			}
			
			function checkHours($gra, $hours){
				$level = '';
				switch($gra){
					case("Minecraft"):
						if($hours < 100){
							$level = ' jesteś początkujący';
						}else{
							$level = ' jesteś zaawansowany';
						}
						break;
					case("Terraria"):
						if($hours < 100){
							$level = ' jesteś początkujący';
						}else{
							$level = ' jesteś zaawansowany';
						}
						break;
					case("CSGO"):
						if($hours < 100){
							$level = ' jesteś początkujący';
						}else{
							$level = ' jesteś zaawansowany';
						}
						break;
					default:
						echo '';
				}
				
				return $level;
			}
			
			howGoodAmI($game, $hours);
			echo checkHours($game, $hours);
			
        ?>
    </body>
</html>