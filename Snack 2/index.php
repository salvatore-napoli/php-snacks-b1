<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="">
			<?php
				if (strlen($_GET['name']) > 3 && strpos($_GET['email'], '.') !== false && strpos($_GET['email'], '@') !== false && is_numeric($_GET['age']) === true) {
					echo 'Accesso riuscito';
				} else {
					echo 'Accesso negato';
				}
			?>
		</div>
	</body>
</html>
