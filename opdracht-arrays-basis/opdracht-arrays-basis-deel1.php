<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht arrays basis deel 1</title>
	</head>

	<body>
		<?php
			$dieren = array("hond", "kat", "konijn", "hamster", "goudvis", "beer", "paard", "koe", "dolfijn", "leeuw");

			$animals[] = "Hond";
			$animals[] = "Kat";
			$animals[] = "Konijn";
			$animals[] = "Hamster";
			$animals[] = "Goudvis";
			$animals[] = "Beer";
			$animals[] = "Paard";
			$animals[] = "Koe";
			$animals[] = "Dolfijn";
			$animals[] = "Leeuw";

			$voertuigen = array("Landvoertuigen" => array("Vespa", "Fiets"), "Watervoertuigen" => array("Surfplank", "Vlot"),
				"Luchtvoertuigen" => array("Luchtballon"));
		?>

		<p><pre><?php var_dump($dieren) ?></pre></p>
		<hr>
		<p><pre><?php var_dump($animals) ?></pre></p>
		<hr>
		<p><pre><?php var_dump($voertuigen) ?></pre></p>
	</body>
</html>