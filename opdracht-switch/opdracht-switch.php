<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht switch</title>
	</head>

	<body>
		<?php
			$number = rand(1, 7);

			switch ($number) {
				case 1:
					echo $number . " maandag";
					break;
				case 2:
					echo $number . " dinsdag";
					break;
				case 3:
					echo $number . " woensdag";
					break;
				case 4:
					echo $number . " donderdag";
					break;
				case 5:
					echo $number . " vrijdag";
					break;
				case 6:
					echo $number . " zaterdag";
					break;
				default:
					echo $number . " zondag";
					break;
			}
		?>
	</body>
</html>