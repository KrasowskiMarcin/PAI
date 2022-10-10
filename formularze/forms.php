<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<p>____________ZADANIE 1________________</p>
    <form action="./forms.php" method="POST">
        <p>Login: </p>
        <p><input type="text" name="login"/></p>
		<p>Haslo: </p>
        <p><input type="password" name="passwd"/></p>
		<p>Wiek: </p>
        <p><input type="number" name="wiek"/></p>
		<p> Zapamiętaj mnie: </p>
		<input type="checkbox" name="remember" value=1 />Tak
		<input type="checkbox" name="remember" value=1 />Nie
        <p><input type="submit" /></p>
    </form>
	<p>____________ZADANIE 2________________</p>
	<form action="./forms.php" method="POST">
        <p>Pseudonim: </p>
        <p><input type="text" name="pseudonim"/></p>
		<p>Komentarz: </p>
        <textarea name='komentarz'>Treść <b>pogrubiona</b> i zwykła.</textarea>
        <p><input type="submit" /></p>
    </form>
	
	<p>____________ZADANIE 3________________</p>
		<form action="./forms.php" method="POST">
		<p>Select:</p>
		<select name="pora">
			<option value="ranek">Ranek</option>
			<option value="poludnie">Południe</option>
			<option value="wieczor">Wieczór</option>
		</select>
		<p>Radio butony</p>
		<p><input type="radio" name="radioSelect" value="1" />1</p>
		<p><input type="radio" name="radioSelect" value="2" />2</p>
		<p><input type="radio" name="radioSelect" value="3" />3</p>
		<p>Checkboxy:</p>
		<p><input type="checkbox" name="czek[]" value="check1" />1</p>
		<p><input type="checkbox" name="czek[]" value="check2" />2</p>
		<p><input type="checkbox" name="czek[]" value="check3" />3</p>
		
		<p><input type="submit" /></p>
		
    </form>
	
        <?php
            if(isset($_POST['login']) && isset($_POST['passwd']) ){
				echo $_POST['login'].'<p>';
				echo 'Hasło: '.sha1($_POST['passwd']);
            }
			
			if(isset($_POST['remember'])){
				echo '<p>'.'Zaznaczono checkbox';
			}
			
			if(isset($_POST['pseudonim']) && isset($_POST['komentarz']) ){
				echo '<p>'.$_POST['pseudonim'];
				echo '<p>'.htmlspecialchars($_POST['komentarz']);
				echo '<p>'.$_POST['komentarz'];
			}
			
			if(isset($_POST['pora']) && isset($_POST['radioSelect']) ){
				echo $_POST['pora'].'<br>';
				echo 'Radio: '.$_POST['radioSelect'];
			}
			echo '<br>';
			if(isset($_POST['czek'])){
			for($i=0; $i<count($_POST['czek']); $i++){
				echo $_POST['czek'][$i] . "<br />";
			}
			}else{
			echo "Nie wybrano niczego";
			}
			
		function wiek($wiek) {
			if($wiek > 1){
				echo 'stary';
			}else{
				echo 'mlody';
			}
		}
		
		if(isset($_POST['wiek'])){
		echo '<br>';
		$getWiek = $_POST['wiek'];
		wiek($getWiek);
		}

        ?>
    </body>
</html>