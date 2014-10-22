<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht if else deel 1</title>
	</head>

	<body>
		<?php
			$jaartal = rand(2004, 2044);

			if(is_int($jaartal / 4) || is_int($jaartal / 400))
			{
				echo $jaartal . " is een schrikkeljaar.";
			}
			else
			{
				echo $jaartal . " is geen schrikkeljaar.";
			}
		?>
	</body>
</html>