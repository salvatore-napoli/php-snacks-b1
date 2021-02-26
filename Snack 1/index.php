<?php
	$matches = [
		'match1' => [
			'homeTeam' => 'Barcelona',
			'awayTeam' => 'Real Madrid',
			'homeScore' => '70',
			'awayScore' => '60'
		],

		'match2' => [
			'homeTeam' => 'Virtus Bologna',
			'awayTeam' => 'Reyer Venezia',
			'homeScore' => '85',
			'awayScore' => '75'
		],
	];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Basket Results</title>
	</head>
	<body>
		<div>
			<?php
				while ($i < count($matches)) {
					$i++;

					echo $matches['match' . strval($i)]['homeTeam'] . ' - ' . $matches['match' . strval($i)]['awayTeam'] . ' | ' . $matches['match' . strval($i)]['homeScore'] . ' - ' . $matches['match' . strval($i)]['awayScore'] . '<br /><br />';
				}
			?>
		</div>
	</body>
</html>
