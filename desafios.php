<?php

    $nota1 = 6.0;
    $nota2 = 5.0;
    $nota3 = 7.0;
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media == 7.0){
        echo("Você Passou de ano! Sua nota é: " . " " . $media);
    } else {
        echo("Reprovado! Sua nota foi: " . " " . $media);
    }

?>