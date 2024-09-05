<?php 

	$array = [];
	$cont = 1.0;
	$arr = 1;
	$altura_mim = 10;
	$altura_max = 00;



	while ($cont < 50) {
		$array[$arr] = 1.3+($cont/50);
		$arr++;
		$array[$arr] = $cont+7;
		$arr++;
		$array[$arr] = "masculino";
		$arr++;
		$array[$arr] = 1.3+($cont/50);
		$arr++;
		$array[$arr] = $cont+7;
		$arr++;
		$array[$arr] = "feminino";
		$arr++;
		$cont++;
	}

	$cont = 150;

	while ($cont > 1) {
		
		if ($cont % 3 == 1) {
			if ($altura_mim > $array[$cont]) {
				$altura_mim = $array[$cont];
			}
		} if($cont % 3 == 1) {
			if ($altura_max < $array[$cont]) {
				$altura_max = $array[$cont];
			}
		} 
		$cont--;
	}
	echo "<br/>$altura_max e $altura_mim<br/>";

 ?>