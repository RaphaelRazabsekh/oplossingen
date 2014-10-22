<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht arrays functies deel 2</title>
	</head>

	<body>
		<?php
			$dieren = array("Hond", "Kat", "Paard", "Chinchilla", "Vis", "Cavia", "Rat", "Muilezel", "Schildpad", "Spin");

			sort($dieren);

			foreach ($dieren as $item)
			{
				echo $item . '<br>';
			}

			echo '<br>';

			$zoogdieren = array("Dolfijn", "Gorilla", "Olifant");

			$dierenLijst = array_merge($dieren, $zoogdieren);

			foreach($dierenLijst as $dier)
			{
				echo $dier . '<br>';
			}
		?>
	</body>
</html>