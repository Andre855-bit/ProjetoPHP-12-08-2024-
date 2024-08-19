<?php 

	
	$vivas = "Testando";
function Teste() {
 echo $GLOBALS["vivas"]."<br>\n"; // imprime $vivas
 // echo $vivas; // não imprime nada
}
Teste();



	function soma($a, $b) {
 return $a + $b;
}
function multiplica($a, $b) {
 return $a * $b;
}
function dobro($a) {
 return 2 * $a;
}
$func = 'soma';
echo $func(4,5) . "<br>\n";
$func = 'multiplica';
echo $func(4,5) . "<br>\n";
$func = 'dobro';
echo $func(4) . "<br>\n";

$a = "teste";
$$a = "Mauricio vivas";
//O exemplo acima e equivalente ao seguinte:
$a = "teste";
$teste = "Mauricio Vivas";

echo $a."<br/>\n".$$a."<br/>\n".$teste."<br/>\n";






 ?>