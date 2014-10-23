<!DOCTYPE html>

<html>
	<head>
		<title>Opdracht while deel 1</title>
	</head>

	<body>
		<?php
			$number = 0;

			while ($number <= 100)
			{
				if($number == 100)
				{
					echo $number++;
				}
				else
				{
					echo $number++ . ", ";
				}
			}

			$secondNumber = 0;
			$getallenTwee = array();

			while($secondNumber < 100)
			{
				if($secondNumber % 3 == 0 && $secondNumber > 40 && $secondNumber < 80)
				{
					$getallenTwee[] = $secondNumber;
				}

				$secondNumber++;
			}

			$getallenReeks2 = implode(", ", $getallenTwee);

			/*Beste meneer Nosenzo

			Voor de tweede opdracht van deel 1 heb ik een paar stukjes uit de oplossingen overgenomen.
			Ik kan wel met eerlijkheid zeggen dat ik alles in de oplossingen eerst heb nagekeken met php.net
			om te kijken of ik het op een andere manier kon doen. Ik heb hier ook niet te lang bij stilgestaan,
			omdat ik zo snel mogelijk de basis wilde afwerken zoals u zelf had gezegd.

			Met vriendelijke groeten
			Iverick Razab-Sekh (2WEBa)*/
		?>

		<p><?= $getallenReeks2 ?></p>
	</body>
</html>