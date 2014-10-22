<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht if else if</title>
	</head>

	<body>
		<?php
			$number = rand(1, 100);

			if($number >= 1 && $number <= 10)
			{
				echo $number . " ligt tussen 1 en 10";
			}
			elseif($number >= 11 && $number <= 20)
			{
				echo $number . " ligt tussen 10 en 20";
			}
			elseif($number >= 21 && $number <= 30)
			{
				echo $number . " ligt tussen 20 en 30";
			}
			elseif($number >= 31 && $number <= 40)
			{
				echo $number . " ligt tussen 30 en 40";
			}
			elseif($number >= 41 && $number <= 50)
			{
				echo $number . " ligt tussen 40 en 50";
			}
			elseif($number >= 51 && $number <= 60)
			{
				echo $number . " ligt tussen 50 en 60";
			}
			elseif($number >= 61 && $number <= 70)
			{
				echo $number . " ligt tussen 60 en 70";
			}
			elseif($number >= 71 && $number <= 80)
			{
				echo $number . " ligt tussen 70 en 80";
			}
			elseif($number >= 81 && $number <= 90)
			{
				echo $number . " ligt tussen 80 en 90";
			}
			else
			{
				echo $number . " ligt tussen 90 en 100";
			}
		?>
	</body>
</html>