<html>
	<header> 
		<title> minimalistic page </title>
		<meta charset = "UTF-8">
	</header>
	<body style= "background-color: #1c2e4a; color: white ">
	
		<!--  tablice-wielowymiarowe-2.php
 2-backend/2-2-php/2-2-06-tablice/

 Created by Jakub Piskorowski on 23/09/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie tablic w języku PHP
-->
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
             /* $products = array(
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
				
				foreach($products as $section => $items)
                foreach($items as $key => $value){
					if($key == 'copier' || $key == 'ball' || $key == 'tape' ){
						echo "$section: \t $key \t ($value)<br>";
					}
                    
				} */
				
			$chessboard = array(
				array('w','s','g','h','k','g','s','w'),
				array('p','p','p','p','p','p','p','p'),
				array(' ',' ',' ',' ',' ',' ',' ',' '),
				array(' ',' ',' ',' ',' ',' ',' ',' '),
				array(' ',' ',' ',' ',' ',' ',' ',' '),
				array(' ',' ',' ',' ',' ',' ',' ',' '),
				array('P','P','P','P','P','P','P','P'),
				array('W','S','G','H','K','G','S','W'),
			);

			
			$chessboard[1][0] = ' ';
			$chessboard[2][0] = 'p';
			
						echo "<pre>";
			foreach($chessboard as $row)
			{
				foreach($row as $piece)
					echo "$piece ";
				echo "<br>";
			}
			echo "</pre>";
						
        ?>
    </body>
</html>
	</body>
</html>