<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Syntax</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet" />
</head>
<body>
	<?php
		$greets = "Hello World";
		echo("<h1 class=\"heading\">$greets</h1>");
		echo(str_replace("World", "Hell", $greets));
		echo('<br/>');
		$arr = ['Element 1', 'Element2', 'Element 3'];
		$arr[] = 'Element 4';
		echo($arr[3]);
	?>
</body>
</html>