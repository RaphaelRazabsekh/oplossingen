<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht Extra Functions - Deel 2</title>
	</head>
	<body>
		<?php
			$fruit = "ananas";
			$fruitPosLast = strrpos($fruit, "a");
			$fruitUpper = strtoupper($fruit);
		?>

		<p><?= $fruitPosLast; ?></p>
		<p><?= $fruitUpper; ?></p>
	</body>
</html>