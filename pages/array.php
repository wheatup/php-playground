<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Array</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
</head>
<body>
	<?php
		// array
		$friends = ['Alice', 'Bob', 'Charlie', 'Daisy'];
		echo("<span>$friends[0]</span>");
		echo('<br>');

		// associated array
		$items = ['name' => 'Alice', 'age' => 20];
		echo("<span>$items[age]</span>");
		echo('<br>');
	?>
</body>
</html>