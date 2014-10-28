<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht functies deel 2</title>
	</head>

	<body>
		<?php
			$test = array(1, 10, 100, 1000, 100, 10, 1);
			$strHtml = '<html><head></head><body></body></html>';

			function drukArrayAf($array)
			{
				$printArray = array();

				foreach ($array as $key => $value)
				{
					$printArray[] = '$test[' . $key . '] heeft als waarde ' . $value;
				}

				return $printArray;
			}

			function validateHtmlTag($html)
			{
				$open = "<html>";
				$close = "</html>";

				if(strpos($html, $open) === 0 && strpos($html, $close) == (strlen($html)) - strlen($close))
				{
					return true;
				}
				else
				{
					return false;
				}
			}

			$afdrukken = drukArrayAf($test);
		?>

		<ul>
            <?php foreach ( $afdrukken as $value ): ?>
                <li><?= $value ?></li>
            <?php endforeach ?>
        </ul>

        <p>De string <?= htmlentities($strHtml) ?> is <?= validateHtmlTag($strHtml) ? 'wel' : 'niet' ?> geldig.</p>
	</body>
</html>