<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht Concatenate</title>
	</head>
	<body>
		<?php
			$naam = "Rapha&euml;l";
			$achternaam = "Razab-Sekh";
			$volledigeNaam = $naam . " " . $achternaam;
		?>

		<p><?= $volledigeNaam; ?></p>
		<p><?php echo strlen($volledigeNaam); ?></p>
	</body>
</html>