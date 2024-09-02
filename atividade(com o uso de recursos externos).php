<?php

  /*  $casa = [1,2,3,4,5,6,1,2,3,4,1,2,3,4,5,6,1,2,3,4,1,2,3,4,5,6,1,2,3,4,1,2,3,4,5,6,1,2,3,4];
    $lugares = 5;  // Defina o número de lugares que você está verificando
    $total_lug = 0.0;

    // Corrigir a condição do loop
    for ($i = 0; $i < count($casa); $i++) { 
        $total_lug += $casa[$i];
    }

    // Definir a variável $mesa
    $mesa = 6; // Defina isso para um índice válido no array $casa

    if ($total_lug < 240 && (240 - $total_lug) >= $lugares) {
        if (($casa[$mesa] + $lugares) <= 6) {
            echo "Vagas disponíveis...<br/><br/>Registro com sucesso!<br/>";
            $casa[$mesa] += $lugares; // Atualiza o array com os novos lugares
        } else {
            echo "Vagas indisponíveis...<br/><br/>Lamento.<br/>";
        }
    } else {
        echo "Vagas indisponíveis...<br/><br/>Lamento.<br/>";
    }
*/
    function adic(){
        $num1 = 10;
        $num2 = 20;
        $resp = $num1+$num2;
        echo "$resp<br /><br />";
    }

    function soma($num1, $num2){
        //$num1 = 10;
        //$num2 = 20;
        $resp = $num1+$num2;
        echo "$resp<br />";
    }
    function somar($num1, $num2){
        $resp = $num1 + $num2;
        echo "<br/>$resp<br/>";
    }

    adic();

    soma(10, 20);
    soma(0, 20);
    soma(15, 20);
    soma(1, 23);

somar(20,30);
 
function somarValores($num1, $num2){
       return ($num1 + $num2);
    }
echo "<br/>Somando valores:".somarValores(50,60);
    
 ?>
