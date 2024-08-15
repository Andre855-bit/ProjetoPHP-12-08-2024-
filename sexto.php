<?php 

$num1 = 20.50;
$num2 = 10.15;
$resp = 0.0;
$salario = 1500,00;
$reajuste = 0.0;

$resp = $num1 + $num2;

if ($resp >= $num1) {
	echo "Resposta é maior do que o num1";

} else {

	echo "Resposta é menor que num1";
}



if ($salario <= 1500) {
	echo "Ao descontar o INSS, fica $reajuste";

} elseif ($salario >= 1501 || $salario <= 1600) {

	$reajuste = $salario*0.9;
	echo "Ao descontar o INSS, fica $reajuste";
} elseif ($salario >= 1601 || $salario <= 2500) {

	$reajuste = $salario*0.79;
	echo "Ao descontar o INSS, fica $reajuste";

} elseif ($salario >= 2501) {
	$reajuste = $salario*0.725;
	echo "Ao descontar o INSS, fica $reajuste";
}




 ?>