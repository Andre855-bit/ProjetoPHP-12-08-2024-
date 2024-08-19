<?php 

$Salário = 1800.00;
$dez = $Salário*0.10;
$quinze =  $Salário*0.15;
$vinte=  $Salário*0.20;
$vinteesete=  $Salário*0.275;


$DES = "O desconto é";
$SAL = "O salário bruto é";
$RES = "O Salário com desconto é";


if ($Salário<= 1500.00  ) {
	echo "$SAL $Salário <br>";
	echo"$DES 10% <br>";
	echo "$RES $dez <br>";
}
else if ($Salário>=1501 || $Salário <=1600) {
	echo "$SAL $Salário <br>";
	echo"$DES 15% <br>";
	echo "$RES $quinze <br>";
}
else if ($Salário>=1601 || $Salário <=1800) {
	echo "$SAL $Salário <br>";
	echo"$DES 20% <br>";
	echo "$RES $vinte <br>";
}
else { 
	echo "$SAL $Salário <br>";
	echo"$DES 27,5% <br>";
	echo "$RES $vinteesete <br>";
}

 ?>