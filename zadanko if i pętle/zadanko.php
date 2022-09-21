<html>
<head>
    <title> PAI </title>
</head>
<body>
    <?php
		$punkty = rand(0,100);
		
		if($punkty >= 0 && $punkty <= 39)
			echo "dostałeś 1";
		else if($punkty >= 40 && $punkty <= 54)
			echo "dostałeś 2";
		else if($punkty >= 55 && $punkty <= 69)
			echo "dostałeś 3";
		else if($punkty >= 70 && $punkty <= 84)
			echo "dostałeś 4";
		else if($punkty >= 85 && $punkty <= 94)
			echo "dostałeś 5";
		else if($punkty >= 95 && $punkty <= 100)
			echo "dostałeś 6";
		
		echo '<br>'.$punkty;
    ?>

</body>
</html>