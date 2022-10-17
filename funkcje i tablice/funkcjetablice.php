<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
			$tab = [];
			for($i = 0; $i < 10; $i++){
				$tab[$i] = rand(0,99);
			}
			
			echo print_r($tab).'<br>';
			
			$tab2 = [];
			$var = 'Offices parties lasting outward nothing';
			$tab2 = explode(' ', $var);
			
			echo print_r($tab2).'<br>';
			
			echo 'Długość tablicy 1: '.count($tab).'<br>';
			echo 'Długość tablicy 2: '.count($tab2).'<br>';
			
			sort($tab, SORT_NUMERIC);
			echo print_r($tab).'<br>';
			
			rsort($tab, SORT_NUMERIC);
			echo print_r($tab).'<br>';
			
			sort($tab2, SORT_STRING);
			echo print_r($tab2).'<br>';
			
			rsort($tab2, SORT_STRING);
			echo print_r($tab2).'<br>';
			
			shuffle($tab);
			echo print_r($tab).'<br>';
			
			shuffle($tab2);
			echo print_r($tab2).'<br>';
			
			echo '____________________<br>';
			echo 'Element pierwszy: '.current($tab).'<br>';
			next($tab);
			next($tab);
			echo 'Obecny element po 2 przesunięciach: '.current($tab).'<br>';
			reset($tab);
			echo 'Element pierwszy po restarcie: '.current($tab).'<br>';
        ?>
    </body>
</html>