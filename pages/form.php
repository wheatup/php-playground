<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet" />
</head>
<body>
	<form class="form" action="./form.php" method="get">
		<h2 class="form--title">Basic Information<h2>
		<div class="form--group">
			<label for="name">Name: </label>
			<input type="text" id="name" name="name" placeholder="Alex" value=<?php echo ($_GET['name']) ?> />
		</div>
		<div class="form--group">
			<label for="age">Age: </label>
			<input type="number" id="age" name="age" placeholder="24" value=<?php echo ($_GET['age']) ?> />
		</div>
		<button class="form--button">submit</button>
		<p>
		<?php echo ($_GET['name'] . ' is ' . $_GET['age'] . ' years old.'); ?>
		</p>
	</form>
</body>
</html>