<?php

    $a = 1;
    $b = 2;
    $soma = $a + $b;
    $nome = "Kalleby";

    $frutas = [
        'maça',
        'bana',
        'uva'
    ];


    
    if(in_array('maça', $frutas)){
       echo "fruta";
    } else if($a == 1){
        echo "Segundo";
    } else {
        echo "Negativo";
    }

?>