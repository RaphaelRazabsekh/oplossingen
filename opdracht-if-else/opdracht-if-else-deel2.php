<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht if else deel 2</title>
	</head>

	<body>
		<?php
			$seconds = 221108521;
			$minutes = $seconds / 60;
			$hours = $minutes / 60;
			$days = $hours / 24;
			$weeks = $days / 7;
			$months = $days / 31;
			$years = $days / 365;
		?>

		<p>Seconden: <?= $seconds ?></p>
		<p>Minuten: <?= floor($minutes) ?></p>
		<p>Uren: <?= floor($hours) ?></p>
		<p>Dagen: <?= floor($days) ?></p>
		<p>Weken: <?= floor($weeks) ?></p>
		<p>Maanden (31): <?= floor($months) ?></p>
		<p>Jaren (365): <?= floor($years) ?></p>
	</body>
</html>