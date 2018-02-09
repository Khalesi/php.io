<?php 
	$txt = "I love class kappa";
	echo strlen($txt);
	echo "<br>";
	echo str_word_count($txt);
	echo "<br>";
	echo strrev($txt);
	echo "<br>";
	echo strpos($txt, "kappa");
	echo "<br>";
	echo str_replace("class kappa", "myself", $txt);
 ?>