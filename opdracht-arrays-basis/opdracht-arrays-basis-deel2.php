<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht arrays basis deel 2</title>
	</head>

	<body>
		<?php
			$numbers = array(1, 2, 3, 4, 5);
			echo $numbers[0] * $numbers[1] * $numbers[2] * $numbers[3] * $numbers[4] . '<br>';

			foreach ($numbers as $number)
			{
				if(!($number % 2 == 0))
				{
					echo $number . " ";
				}
			}

			echo '<br>';

			$backNumbers = array(5, 4, 3, 2, 1);

			for ($i = 0; $i < count($numbers); $i++)
			{ 
				echo $numbers[$i] . " + " . $backNumbers[$i] . " = " . ($numbers[$i] + $backNumbers[$i]) . '<br>';
			}
		?>
	</body>
</html>