<?php 

	echo "Escolha:<br/><br/> 1-Banana<br/> 2-Laranja<br/> 3-Abacaxi<br/> 4-Sair<br/><br/>";


	$alter = 1;

	switch ($alter) {
		case '1':
			echo "Você escolheu Banana!";
			break;
		case '2':
			echo "Você escolheu Laranja!"; 
			break;
		case '3':
			echo "Você escolheu Abacaxi!";
			break;
		default:
			echo "Você escolheu sair (não gosta de brincar)!";
			break;
	}

 ?>