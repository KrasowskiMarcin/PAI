<html>
	<header> 
		<title> minimalistic page </title>
		<meta charset = "UTF-8">
	</header>
	<body style= "background-color: #1c2e4a; color: white ">
		<?php
		
		$tab[] = 'Książka 1';
		$tab[] = 'Książka 2';
		$tab[] = 'Książka 3';
		$tab[] = 'Książka 4';
		
		echo 'Default<br>';
		for($i = 0; $i < 4 ; $i++){
			echo ($tab[$i]).'<br>';
		}
		echo '<br>';
		echo 'Reversed<br>';
		for($i = 3; $i >= 0 ; $i--){
			echo ($tab[$i]).'<br>';
		}
		echo '<br>';
		
		$paper['copier'] = "Do kserokopiarek i uniwersalny";
		$paper['inkjet'] = "Do drukarek atramentowych";
		$paper['laser'] = "Do drukarek laserowych";
		$paper['photo'] = "Papier fotograficzny";

		foreach($paper as $item){
			echo $item.'<br>';
		}
		
		echo 'Pierwszy: '.$paper['copier'].'<br>';
		echo 'Ostatni: '.$paper['photo'];
		
		$a = [['id' => '11111', 'id2' => '1111222'], ['id'=> '22222'], ['id'=>'33333333'], ['id'=>'44444']];
		
		echo '<br><br>';
		echo $a[0]['id2'];
		echo '<br><br>';
		echo $a[1]['id'];
		echo '<br><br>';
		echo $a[2]['id'];
		echo '<br><br>';
		echo $a[3]['id'];
		
		
		//
            $products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            foreach($products as $section => $items)
                foreach($items as $key => $value)
                    echo "$section: \t $key \t ($value)<br>";
            echo "</pre>";


		?>
	</body>
</html>