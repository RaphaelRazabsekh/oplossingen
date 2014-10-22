<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht arrays functies deel 2</title>
	</head>

	<body>
		<?php
			$numbers = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
			
			$duplicate = array_unique($numbers);
			sort($duplicate);

			foreach ($duplicate as $number)
			{
				echo $number . '<br>';
			}
		?>
	</body>
</html>