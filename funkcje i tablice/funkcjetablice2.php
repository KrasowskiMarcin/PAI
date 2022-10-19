<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
		<form action="./funkcjetablice2.php" method="POST">
			Tekst: <input type="text" name="tekstowy">
			<input type="submit" value="Prześlij">
		</form>
		<form action="./funkcjetablice2.php" method="POST">>
			<input type="submit" name="stringPop" value="Usuń ostatni element">
		</form>
		<br>
		<form action="./funkcjetablice2.php" method="POST">
			Liczba: <input type="number" name="liczbowy">
			<input type="submit" value="Prześlij">
		</form>
		<form action="./funkcjetablice2.php" method="POST">>
			<input type="submit" name="intPop" value="Usuń ostatni element">
		</form>
        <?php
			$tabString = array("elem1","elem2","elem3");
			$tabInt = array(1,2,3);
			$tekst;
			$liczba;
			
			echo "<br><br>";
			
			echo "Tablica stringów, wartość początkowa: ";
			echo print_r($tabString)."<br>";
			
			echo "Tablica intów, wartość początkowa: ";
			echo print_r($tabInt)."<br>";
			
			echo "<br><br>";
			
			if(isset($_POST["tekstowy"])){
				$tekst = $_POST["tekstowy"];
				if($tekst == null){
					return;
				}
				$tabString[count($tabString)] = $tekst;
				echo "Po dodaniu elementu: ";
				echo print_r($tabString)."<br>";
			}
			
			if(isset($_POST["liczbowy"])){
				$liczba = $_POST["liczbowy"];
				if($liczba == null){
					return;
				}
				$tabInt[count($tabInt)] = $liczba;
				echo "Po dodaniu elementu: ";
				echo print_r($tabInt)."<br>";
			}
			
			if(isset($_POST["stringPop"])){
				$popString = array_pop($tabString);
				if($popString == null){
					return;
				}
				echo "After pop: ";
				echo print_r($tabString)."<br>";
			}
			
			if(isset($_POST["intPop"])){
				$popInt = array_pop($tabInt);
				if($popInt == null){
					return;
				}
				echo "After pop: ";
				echo print_r($tabInt)."<br>";
			}
		?>
    </body>
</html>