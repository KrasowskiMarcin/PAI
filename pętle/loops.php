<html>
	<header> 
		<title> minimalistic page </title>
		<meta charset = "UTF-8">
	</header>
	<body style= "background-color: #1c2e4a; color: white ">
		<?php
			// ramka
			$size = 5;
			$imgSize = 150 ;
			for($i = 0; $i < $size; $i++){
				echo '<img width = '.$imgSize.' px height = '.$imgSize.' px src= "logo.png"/>';
				
				for($j = 0; $j < $size; $j++){
					if($i == 0 || $i == $size-1){
						echo '<img width = '.$imgSize.' px height = '.$imgSize.' px src="logo.png"/>';
					}else{
						if($j == $size-1){
							echo '<img width = '.$imgSize.' px height = '.$imgSize.' px src="logo.png"/>';
						}else{
							if($j % 2 == 0){
								echo '<img width = '.$imgSize.' px height = '.$imgSize.' px src="terry2.gif"/>';
							}else{
								echo '<img width = '.$imgSize.' px height = '.$imgSize.' px src="terry.gif"/>';
							}
						}					
					}
				}
				echo "<br>";
			}
			
			echo "<br>";
			// tabliczka mnożenia
			for($k = 1; $k <= 10; $k++){
				echo "___".$k."___";
				for($l = 1; $l <= 10; $l++){
					echo "<br>";
					echo $k." * ".$l." = ".$k * $l;
				}
				echo "<br>";
			}
			
			

		?>
	</body>
</html>