<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
</head>
<body>
	<section class="form">
		<form class="form--form" action="./form.php" method="post">
			<h2 class="form--form--title">Basic Information<h2>
			<div class="form--form--group">
				<label for="name">Name: </label>
				<input type="text" id="name" name="name" placeholder="Please enter your name" value="<?php
					if (array_key_exists('name', $_POST)) {
						echo ($_POST['name']);
					}
				?>">
			</div>
			<div class="form--form--group">
				<label for="age">Age: </label>
				<input type="number" id="age" name="age" placeholder="Please enter your age" value="<?php
					if (array_key_exists('age', $_POST)) {
						echo ($_POST['age']);
					}
				?>">
			</div>
			<button class="form--form--button">submit</button>
			<p><?php
				if (array_key_exists('name', $_POST) && array_key_exists('age', $_POST)) {
					echo ($_POST['name'] . ' is ' . $_POST['age'] . ' years old.');
				}
			?></p>
		</form>
	</section>
</body>
</html>