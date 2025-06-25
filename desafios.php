<?php

    $valor = 7;
    $soma = 0;

    echo "Tabuada do 7:<br>";

    for ($i = 1; $i <= 10; $i++){
        $resultado = $i * $valor;
        echo "$i x 7 = " . $resultado . "<br>";
        $soma += $resultado;
    }

    echo "A soma de todos os resultados da tabela: $soma";

?>