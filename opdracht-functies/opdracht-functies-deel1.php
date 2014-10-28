<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht functies deel 1</title>
	</head>

	<body>
		<?php

			function berekenSom($getal1, $getal2)
			{
				return $getal1 + $getal2;
			}

			function vermenigvuldig($getal1, $getal2)
			{
				return $getal1 * $getal2;
			}

			function isEven($getal)
			{
				if($getal % 2 == 0)
				{
					return "true";
				}
				else
				{
					return "false";
				}
			}

			function stringInfo($string)
			{
				$length = strlen($string);
				$upper = strtoupper($string);

				$info = array("string: " => $string, "length: " => $length, "uppercase: " => $upper);

				return $info;
			}
		?>

		<p><?= berekenSom(2, 5) ?></p>
		<p><?= vermenigvuldig(2, 5) ?></p>
		<p><?= isEven(4) ?></p>
		<pre><?= print_r(stringInfo("raphael")) ?></pre>
	</body>
</html>