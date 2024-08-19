<?php 

/*$num1 = 20.50;
$num2 = 10.15;
$resp = 0.0;*/
$salario = 1750.00;
$reajuste = 0.0;

/*$resp = $num1 + $num2;

if ($resp >= $num1) {
	echo "Resposta é maior do que o num1";

} else {

	echo "Resposta é menor que num1";
}*/

$desc1 = "Seu sálario bruto é R$$salario, se descontar do INSS é de "
$desc2 = " e seu salário final fica R$$reajuste"




if ($salario <= 1500) {
	$reajuste = $salario;
	echo "$desc1 0% $desc2";

} elseif ($salario > 1500 || $salario <= 1600) {

	$reajuste = $salario*0.9;
	echo "$desc1 10% $desc2";
 }elseif ($salario > 1600 || $salario <= 1800) {

	$reajuste = $salario*0.9;
	echo "$desc1 16,5% $desc2";

} elseif ($salario > 1800 || $salario <= 2500) {

	$reajuste = $salario*0.79;
	echo "$desc1 20% $desc2";

} else {
	$reajuste = $salario*0.725;
	echo "$desc1 27,5% $desc2";
}




 ?>