<?php 
$num1 = 7;
$num2 = 3;
$num3 = 5;
$cont = 0;
$t= 0;

	while ($cont<5){ 

		if ($num1 < $num2) {
			$t = $num1;
			$num1 = $num2;
			$num2 = $t;
		}if($num2<$num3) {
	        $t = $num2; 
	        $num2 = $num3;
	        $num3 = $t;
		}
		$cont++;
		
	}
	  

  echo "($num1)  ($num2)  ($num3)";





 ?>