<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht functies gevorderd deel 1</title>
	</head>
	<body>
		<?php
			$md5HashKey = "d1fa402db91a7a93c4f414b8278ce073";

			function first($key)
			{
				$splitted = str_split($GLOBALS['md5HashKey']);
				$aantal = 0;

				foreach($splitted as $value)
				{
					if($value == "2")
					{	
						$aantal++;
					}
				}

				return ($aantal / strlen($key)) * 100 . "%";
			}

			function second()
			{
				global $md5HashKey;
				$splitted = str_split($md5HashKey);
				$aantal = 0;

				foreach($splitted as $value)
				{
					if($value == "8")
					{	
						$aantal++;
					}
				}

				return ($aantal / strlen($md5HashKey)) * 100 . "%";
			}

			function third($key)
			{
				$splitted = str_split($key);
				$aantal = 0;

				foreach($splitted as $value)
				{
					if($value == "a")
					{	
						$aantal++;
					}
				}

				return ($aantal / strlen($key)) * 100 . "%";
			}
		?>
		<p>Functie 1: 2 komt <?= first($md5HashKey) ?> voor in de string <?= $md5HashKey ?></p>
		<p>Functie 2: 8 komt <?= second() ?> voor in de string <?= $md5HashKey ?></p>
		<p>Functie 3: a komt <?= third($md5HashKey) ?> voor in de string <?= $md5HashKey ?></p>
	</body>
</html>