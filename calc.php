<?php 

	function calc($num1, $opera, $num2){
		if ($opera == "+") {
			$resp = $num1 + $num2;
			echo "<br />$num1+$num2=$resp<br />";
			// code...
		} elseif ($opera == "-") {
			$resp = $num1 - $num2;
			echo "<br />$num1-$num2=$resp<br />";
			// code...
		} elseif ($opera == "*") {
			$resp = $num1 * $num2;
			echo "<br />$num1*$num2=$resp<br />";

		} elseif ($opera == "/") {
			$resp = $num1 / $num2;
			echo "<br />$num1/$num2=$resp<br />";
		} else {
			echo "<br />Algo de errado não está certo!!!<br />";
		}

		calc(7, +, 6);
		calc(7,-,6);
		calc(7,*,6);
		calc(7,/,6);
		
	}

 ?>