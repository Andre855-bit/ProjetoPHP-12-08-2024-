<?php

    $casa = [1,2,3,4,5,6,1,2,3,4,1,2,3,4,5,6,1,2,3,4,1,2,3,4,5,6,1,2,3,4,1,2,3,4,5,6,1,2,3,4];
    $lugares = 5;  // Defina o número de lugares que você está verificando
    $total_lug = 0.0;

    // Corrigir a condição do loop
    for ($i = 0; $i < 40 ; $i++) { 
        $total_lug += $casa[$i];
    }

    // Definir a variável $mesa
    $mesa = 2; // Defina isso para um índice válido no array $casa

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
?>