<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
	<style type="text/css">
		h1
		{
			color: black;
		}
		p
		{
			color: grey;
			font-size: 2em;
		}
		h2
		{
			color: green;
		}
		h3
		{
			color: red;
		}
	</style>
</head>
<body>
<h1>bet yetu</h1>
<p>please select any number between 1 - 5 and be a lucky winner!!!!!</p>
<form method="GET">
	<input type="number" name="BET">
	<button>Place Bet</button>
</form>
<?php 
	if (isset($_GET['BET'])) {
		$number = $_GET['BET'];
		switch ($number) {
			case 1:
				echo "<h2>confirmed!!!  YOU WON KSH1M</h2>";
				break;
			
			case 2:
				echo "<h2>confirmed!!!  YOU WON KSH5M</h2>";
				break;
			case 3:
				echo "<h2>confirmrd!!! YOU WON KSH2M</h2>";
				break;
			case 4:
				echo "<h2>confirmrd!!! YOU WON KSH10000</h2>";
				break;
			case 5:
				echo "<h2>confirmrd!!! YOU WON KSH5000</h2>";
				break;
				default:
				echo "<h3>please enter a number between 1 - 5 </h3>";
		}
	}
 ?>
</body>
</html>