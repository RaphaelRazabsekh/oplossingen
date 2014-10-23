<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht for deel 2</title>
		<style>
			td
			{
				width: 50px;
				height: 50px;
				text-align: center;
			}

			.even
			{
				background-color: green;
			}
		</style>
	</head>

	<body>
		<table>
			<?php for ($i=1; $i <= 10; $i++): ?>
				<tr>
					<?php for ($j=1; $j <= 10; $j++): ?>
						<td class = "<?= (($i * $j) % 2 > 0) ? : 'even'?>"> <?= $i * $j ?> </td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>
	</body>
</html>