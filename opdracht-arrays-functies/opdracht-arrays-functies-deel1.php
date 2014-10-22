<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht arrays functies deel 1</title>
	</head>

	<body>
		<?php
			$dieren = array("Hond", "Kat", "Paard", "Chinchilla", "Vis", "Cavia", "Rat", "Muilezel", "Schildpad", "Spin");

			echo count($dieren) . '<br>';

			$teZoekenDier = "Kat";

			if(in_array($teZoekenDier, $dieren))
			{
				echo $teZoekenDier . " zit WEL in de array \$dieren.";
			}
			else
			{
				echo $teZoekenDier . " zit NIET in de array \$dieren.";
			}
		?>
	</body>
</html>
