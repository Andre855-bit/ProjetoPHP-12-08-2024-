<?php 
echo "Digite dois números e entre eles o símbolo da operação desejada!!!<br /><br />";

	function calc($num1, $opera, $num2){
		if ($opera == "+") {
			$resp = $num1 + $num2;
			echo "<br />Os Números digitados foram:$num1 e $num2<br/>A operação: $opera<br/>O resultado: $resp<br />";
			// code...
		} elseif ($opera == "-") {
			$resp = $num1 - $num2;
			echo "<br />Os Números digitados foram:$num1 e $num2<br/>A operação: $opera<br/>O resultado: $resp<br />";
			// code...
		} elseif ($opera == "*") {
			$resp = $num1 * $num2;
			echo "<br />Os Números digitados foram:$num1 e $num2<br/>A operação: $opera<br/>O resultado: $resp<br />";

		} elseif ($opera == "/") {
			$resp = $num1 / $num2;
			echo "<br />Os Números digitados foram:$num1 e $num2<br/>A operação: $opera<br/>O resultado: $resp<br />";
		} else {
			echo "<br />Algo de errado não está certo!!!<br />";
		}

		
	}

		calc(7, "+", 6);
		calc(7,"-",6);
		calc(7,"*",6);
		calc(7,"/",6);

 ?>