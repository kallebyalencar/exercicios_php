<?php

    $a = 1;
    $b = 2;
    $soma = $a + $b;
    $nome = "Kalleby";

    $frutas = [
        'ma�a',
        'bana',
        'uva'
    ];


    
    if(in_array('ma�a', $frutas)){
       echo "fruta";
    } else if($a == 1){
        echo "Segundo";
    } else {
        echo "Negativo";
    }

?>