<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht Extra Functions - Deel 1</title>
	</head>
	<body>
		<?php
			$fruit = "kokosnoot";
			$fruitLength = strlen($fruit);
			$fruitPos = strpos($fruit, "o");
		?>

		<p><?= $fruitLength; ?></p>
		<p><?= $fruitPos; ?></p>
	</body>
</html>