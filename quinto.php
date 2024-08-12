<?php 

	print "Usando print para exibir na tela<br />";

	$data = "20 de agosto de 2024";
	$salario = 850.00;
	$cargo = "Estagiário";

	echo "Arquivo criado em $data <br />";

	printf("Salário mínimo: R$ %.2f por mês <br />", $salario);

	$teste = sprintf("%s recebe R$ %.2f por mês <br />", $cargo, $salario*2);

	echo $teste;


 ?>