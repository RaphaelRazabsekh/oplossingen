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
				$dag = strtoupper("maandag");
				$vervangen = str_replace("A", "a", $dag);
				$laatste = substr_replace($dag, "a", 5, -1);
			}
			elseif ($getal == 2)
			{
				$dag = strtoupper("dinsdag");
				$vervangen = str_replace("A", "a", $dag);
				$laatste = substr_replace($dag, "a", 5, -1);
			}
			elseif($getal == 3)
			{
				$dag = strtoupper("woensdag");
				$vervangen = str_replace("A", "a", $dag);
				$laatste = substr_replace($dag, "a", 6, -1);
			}
			elseif($getal == 4)
			{
				$dag = strtoupper("donderdag");
				$vervangen = str_replace("A", "a", $dag);
				$laatste = substr_replace($dag, "a", 7, -1);
			}
			elseif($getal == 5)
			{
				$dag = strtoupper("vrijdag");
				$vervangen = str_replace("A", "a", $dag);
				$laatste = substr_replace($dag, "a", 5, -1);
			}
			elseif($getal == 6)
			{
				$dag = strtoupper("zaterdag");
				$vervangen = str_replace("A", "a", $dag);
				$laatste = substr_replace($dag, "a", 6, -1);
			}
			else
			{
				$dag = strtoupper("zondag");
				$vervangen = str_replace("A", "a", $dag);
				$laatste = substr_replace($dag, "a", 4, -1);
			}
		?>

		<p><?= $dag; ?></p>
		<p><?= $vervangen; ?></p>
		<p><?= $laatste; ?></p>
	</body>
</html>