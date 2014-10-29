<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht recursive</title>
	</head>

	<body>
		<?php
			function berekenRente($getal)
			{
				static $jaren = array();
				static $jaar = 1;

				$rente = $getal * (8/100);
				$winst = $getal + $rente;

				$jaren[] = "Na " . $jaar . " jaar bedraagt het totaal bedrag &euro; " . floor($winst) . ".";

				if($jaar < 10)
				{
					$jaar++;
					berekenRente($winst);
				}

				return $jaren;
			}

			$voorbeeld = berekenRente(100000);
		?>

		<ul>
			<?php foreach($voorbeeld as $value): ?>
				<li><?php echo $value ?></li>
			<?php endforeach ?>
		</ul>
	</body>
</html>