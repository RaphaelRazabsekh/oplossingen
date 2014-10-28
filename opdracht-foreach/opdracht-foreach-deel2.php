<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht foreach deel 2</title>
		<style>
			*
			{
				margin: 0;
				padding: 0;
			}
		</style>
	</head>

	<body>
		<?php
			$text = file_get_contents('text-file.txt');
			$textChars = str_split($text);

			$Aaantal = 0;
			$Baantal = 0;
			$Caantal = 0;
			$Daantal = 0;
			$Eaantal = 0;
			$Faantal = 0;
			$Gaantal = 0;
			$Haantal = 0;
			$Iaantal = 0;
			$Jaantal = 0;
			$Kaantal = 0;
			$Laantal = 0;
			$Maantal = 0;
			$Naantal = 0;
			$Oaantal = 0;
			$Paantal = 0;
			$Qaantal = 0;
			$Raantal = 0;
			$Saantal = 0;
			$Taantal = 0;
			$Uaantal = 0;
			$Vaantal = 0;
			$Waantal = 0;
			$Xaantal = 0;
			$Yaantal = 0;
			$Zaantal = 0;

			foreach($textChars as $value)
			{
				if($value == "a" || $value == "A")
				{
					$Aaantal++;
				}
				elseif($value == "b" || $value == "B")
				{
					$Baantal++;
				}
				elseif($value == "c" || $value == "C")
				{
					$Caantal++;
				}
				elseif($value == "d" || $value == "D")
				{
					$Daantal++;
				}
				elseif($value == "e" || $value == "E")
				{
					$Eaantal++;
				}
				elseif($value == "f" || $value == "F")
				{
					$Faantal++;
				}
				elseif($value == "g" || $value == "G")
				{
					$Gaantal++;
				}
				elseif($value == "h" || $value == "H")
				{
					$Haantal++;
				}
				elseif($value == "i" || $value == "I")
				{
					$Iaantal++;
				}
				elseif($value == "j" || $value == "J")
				{
					$Jaantal++;
				}
				elseif($value == "k" || $value == "K")
				{
					$Kaantal++;
				}
				elseif($value == "l" || $value == "L")
				{
					$Laantal++;
				}
				elseif($value == "m" || $value == "M")
				{
					$Maantal++;
				}
				elseif($value == "n" || $value == "N")
				{
					$Naantal++;
				}
				elseif($value == "o" || $value == "O")
				{
					$Oaantal++;
				}
				elseif($value == "p" || $value == "P")
				{
					$Paantal++;
				}
				elseif($value == "q" || $value == "Q")
				{
					$Qaantal++;
				}
				elseif($value == "r" || $value == "R")
				{
					$Raantal++;
				}
				elseif($value == "s" || $value == "S")
				{
					$Saantal++;
				}
				elseif($value == "t" || $value == "T")
				{
					$Taantal++;
				}
				elseif($value == "u" || $value == "U")
				{
					$Uaantal++;
				}
				elseif($value == "v" || $value == "V")
				{
					$Vaantal++;
				}
				elseif($value == "w" || $value == "W")
				{
					$Waantal++;
				}
				elseif($value == "x" || $value == "X")
				{
					$Xaantal++;
				}
				elseif($value == "y" || $value == "Y")
				{
					$Yaantal++;
				}
				else
				{
					$Zaantal++;
				}
			}
		?>

		<p>A: <?= $Aaantal ?></p>
		<p>B: <?= $Baantal ?></p>
		<p>C: <?= $Caantal ?></p>
		<p>D: <?= $Daantal ?></p>
		<p>E: <?= $Eaantal ?></p>
		<p>F: <?= $Faantal ?></p>
		<p>G: <?= $Gaantal ?></p>
		<p>H: <?= $Haantal ?></p>
		<p>I: <?= $Iaantal ?></p>
		<p>J: <?= $Jaantal ?></p>
		<p>K: <?= $Kaantal ?></p>
		<p>L: <?= $Laantal ?></p>
		<p>M: <?= $Maantal ?></p>
		<p>N: <?= $Naantal ?></p>
		<p>O: <?= $Oaantal ?></p>
		<p>P: <?= $Paantal ?></p>
		<p>Q: <?= $Qaantal ?></p>
		<p>R: <?= $Raantal ?></p>
		<p>S: <?= $Saantal ?></p>
		<p>T: <?= $Taantal ?></p>
		<p>U: <?= $Uaantal ?></p>
		<p>V: <?= $Vaantal ?></p>
		<p>W: <?= $Waantal ?></p>
		<p>X: <?= $Xaantal ?></p>
		<p>Y: <?= $Yaantal ?></p>
		<p>Z: <?= $Zaantal ?></p>
	</body>
</html>