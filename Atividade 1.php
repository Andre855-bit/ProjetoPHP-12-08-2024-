<?php
 

 $Not1a1=5;
 $Not2a1=6;
$Not1a1=2;
 $Not2a1=2;
 $Aluno1 = (($Not1a1 + $Not2a1)/2);

 $Not1a2=3;
 $Not2a2=8;
 $Aluno2= (($Not1a2 + $Not2a2)/2);

 $Not1a1=10;
 $Not2a1=9;
 $Aluno3 = (($Not1a1 + $Not2a1)/2);

 $Not1a2=10;
 $Not2a2=8;
 $Aluno4= (($Not1a2 + $Not2a2)/2);

 $Not1a1=5;
 $Not2a1=4;
 $Aluno5 = (($Not1a1 + $Not2a1)/2);

 $Not1a2=7;
 $Not2a2=8;
 $Aluno6= (($Not1a2 + $Not2a2)/2);

 $num = 1;
 $aluno = "Aluno$num";

 while ($num < 7) {
 	$num++;
 	if ($$aluno<3){
	echo "Aluno $num Reprovado<br/><br/>";
	}
	else if($$aluno<=7){
		echo "Aluno $num necessita prestar Exame<br/><br/>";
	}
	else{
		echo"Aluno $num Aprovado<br/><br/>";
	}
 }




/*$Aluno3= (($Not1a3 + $Not2a3)/2);
 $Not1a3=7;
 $Not2a3=9;
if ($Aluno3<3){
	echo "Reprovado";
}
else if($Aluno3<=7){
	echo "Exame";
}
else{
	echo"Aprovado";
}


$Aluno4= (($Not1a4 + $Not2a4)/2);
 $Not1a4=5;
 $Not2a4=8;
if ($Aluno4<3){
	echo "Reprovado";
}
else if($Aluno4<=7){
	echo "Exame";
}
else{
	echo"Aprovado";
}


$Aluno5= (($Not1a5 + $Not2a5)/2);
 $Not1a5=9;
 $Not2a5=5;
if ($Aluno5<3){
	echo "Reprovado";
}
else if($Aluno5<=7){
	echo "Exame";
}
else{
	echo"Aprovado";
}


$Aluno6= (($Not1a6 + $Not2a6)/2);
 $Not1a6=10;
 $Not2a6=5;

if ($Aluno6<3){
	echo "Reprovado";
}
else if($Aluno6<=7){
	echo "Exame";
}
else{
	echo"Aprovado";
}


$Média = (($Aluno1+$Aluno2+$Aluno3+$Aluno4+$Aluno5+$Aluno6)/6);
$Alunos = */
?>