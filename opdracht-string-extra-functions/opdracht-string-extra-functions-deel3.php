<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht Extra Functions - Deel 2</title>
	</head>
	<body>
		<?php
			$lettertje = "e";
			$cijfertje = 3;
			$langsteWoord = "zandzeepsodemineralenwatersteenstralen";
			$strReplace = str_replace($lettertje, $cijfertje, $langsteWoord);	
		?>

		<p><?= $strReplace; ?></p>
	</body>
</html>