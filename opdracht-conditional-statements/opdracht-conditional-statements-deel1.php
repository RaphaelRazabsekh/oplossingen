<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht Conditional Statements Deel 1</title>
	</head>
	<body>
		<?php
			$getal = rand(1, 7);

			if($getal == 1)
			{
				echo "maandag";
			}
			elseif ($getal == 2)
			{
				echo "dinsdag";
			}
			elseif($getal == 3)
			{
				echo "woensdag";
			}
			elseif($getal == 4)
			{
				echo "donderdag";
			}
			elseif($getal == 5)
			{
				echo "vrijdag";
			}
			elseif($getal == 6)
			{
				echo "zaterdag";
			}
			else
			{
				echo "zondag";
			}
		?>
	</body>
</html>