<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht functies gevorderd deel 2 - Angry Birds</title>
	</head>

	<body>
		<?php
			$pigHealth = 5;
			$maximumThrows = 8;

			$spelverloop = array();

			function calculateHit()
			{
				global $pigHealth;

				$spel = array();

				$chance = rand(0, 9);
				$isRaak = ($chance <= 3) ? true : false;

				if($isRaak)
				{
					$pigHealth--;

					if($pigHealth == 1)
					{
						$dataArray['string'] = 'Raak! Er is nog ' . $pigHealth . ' varken over.';
					}
					elseif ($pigHealth == 0)
					{
						$dataArray['string'] = 'Alle varkens zijn dood!';
					}
					else
					{
						$dataArray['string'] = 'Raak! Er zijn nog ' . $pigHealth . ' varkens over.';
					}
				}
				else
				{
					if($pigHealth == 1)
					{
						$dataArray['string'] = 'Mis! Nog ' . $pigHealth . ' varken in het team.';
					}
					else
					{
						$dataArray['string'] = 'Mis! Nog ' . $pigHealth . ' varkens in het team.';
					}
					
				}

				return $dataArray;
			}

			function launchAngryBird()
			{
				global $pigHealth;
				global $maximumThrows;

				global $spelverloop;

				if($maximumThrows != 0 && $pigHealth > 0)
				{
					$maximumThrows--;
					$result = calculateHit();
					$spelverloop[] = $result['string'];
					launchAngryBird();
				}
				else
				{
					if($pigHealth > 0)
					{
						$spelverloop[] = "U hebt verloren!";
					}
					else
					{
						$spelverloop[] = "U hebt gewonnen!";
					}
				}
			}

			launchAngryBird();
		?>

            <?php foreach( $spelverloop as $resultaat ): ?>
                <p><?= $resultaat ?></p>
            <?php endforeach ?>
	</body>
</html>