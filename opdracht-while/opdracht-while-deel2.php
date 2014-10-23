<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht while deel 2</title>

		<style>
			.odd
			{
				background-color: green;
			}
			td
			{
				width: 50px;
				height: 50px;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<?php
			$tafels = 1;
		?>

		<table>
			<?php while($tafels <= 10): ?>
				<tr>
					<?php $getal = 1; ?>
					<?php while($getal <= 10): ?>
						<td class = "<?= (($tafels * $getal) % 2 > 0 ) ? '' : 'odd'?>"><?= ($tafels * $getal) ?></td>
						<?php $getal++ ?>
					<?php endwhile ?>
				</tr>
				<?php $tafels++ ?>
			<?php endwhile ?>
		</table>
	</body>
</html>