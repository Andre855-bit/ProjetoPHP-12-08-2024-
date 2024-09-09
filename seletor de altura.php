<?php 

	$array = [];
	$cont = 1.0;
	$arr = 1;
	$altura_mim = 10;
	$altura_max = 00;
	$media_muie = 0;
	$elementos = 0;
	$posicao = 0;
	$idade_min_mul = 100;
	$idade_max_hom = 00;



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
		}if($cont % 3 == 1) {
			if ($altura_max < $array[$cont]) {
				$altura_max = $array[$cont];
			}
		} if($cont % 3 == 1) {
			if ($altura_max < $array[$cont]) {
				$altura_max = $array[$cont];
			}
		}if( $array[$cont] == "feminino"){
				$posicao = $cont - 2;
				$media_muie += $array[$posicao];
				$elementos++;

		}if($array[$cont] == "masculino") {
			$posicao = $cont - 1;
			if ($idade_max_hom < $array[$posicao]){
				$idade_max_hom = $array[$posicao];
			}
		}if($array[$cont] == "feminino") {
			$posicao = $cont - 1;
			if ($idade_min_mul > $array[$posicao]) {
				$idade_min_mul = $array[$posicao];
			}
		}

		$cont--;
	}

	echo "<br/>A maior altura é $altura_max e a menor altura é $altura_mim<br/>";

	$media_muie = $media_muie / $elementos;

	echo "<br/>A média das idades das mulheres é $media_muie<br/>";
	echo "<br/>O homem com maior idade possui $idade_max_hom anos e a mulher com menor idade possui $idade_min_mul anos<br/>";

 ?>