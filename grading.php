<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
	<style type="text/css">
		h2
		{
			color: brown;
		}
	</style>
</head>
<body>
	<h1>Grading System</h1>
	<form method="GET">
		<input type="number" name="Grade">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['Grade'])) {
			$marks = $_GET['Grade'];
	if ($marks<=20) 
		{
			echo "Fail";
		}
	elseif ($marks>20 && $marks<=40)
		{
			echo "<h2>D</h2>";
		}
	elseif ($marks>40 && $marks<=60) 
		{
			echo "C";
		}
	elseif ($marks>60 && $marks<=80) 
		{
			echo "B";
		}
	elseif ($marks>80 && $marks<=100) 
		{
			echo "A";
		}
	else 
		{
			"INPUT CORRECT MARKS";
		}
		}
	 ?>
</body>
</html>