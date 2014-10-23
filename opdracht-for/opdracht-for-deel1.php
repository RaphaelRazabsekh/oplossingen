<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht for deel 1</title>
	</head>

	<body>
		<?php
			for ($i=0; $i <= 100; $i++)
			{ 
				if($i == 100)
				{
					echo $i;
				}
				else
				{
					echo $i . ", ";
				}
			}

			echo '<br><br>';

			for ($i=0; $i <= 100; $i++)
			{ 
				if($i % 3 == 0 && $i > 40 && $i < 80)
				{
					if($i == 78)
					{
						echo $i;
					}
					else
					{
						echo $i . ", ";
					}
				}
			}
		?>
	</body>
</html>