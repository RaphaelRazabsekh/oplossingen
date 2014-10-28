<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht foreach deel 1</title>
	</head>

	<body>
		<?php
			$text = file_get_contents('text-file.txt');
			$textChars = str_split($text);
			rsort($textChars);
			$reversed = array_reverse($textChars);

			$tellerArray = array();
			$aantal = 0;

			foreach($reversed as $value)
			{
				if (isset($tellerArray[$value]))
				{
					$tellerArray[$value]++;

				}
				else
				{
					$tellerArray[$value] = 1;
					$aantal++;	
				}
			}

			echo $aantal . " verschillende karakters";
		?>

		<pre><?php print_r($tellerArray) ?></pre>
	</body>
</html>