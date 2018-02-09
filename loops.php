<!DOCTYPE html>
<html>
<head>
	<title>loops</title>
</head>
<body>
 	<h1> for loop</h1>
 	<form method ="GET">
 		<input type="number" name="forloop">
 		<button>output</button>
 	</form>
 	<?php 
 		if (isset($_GET['forloop'])) {
 			$x =$_GET['forloop'];
 			while ($x <= 100) {
 				echo "the number is: $x";
 				$x++;
 			}
 		}
 	 ?>
</body>
</html>