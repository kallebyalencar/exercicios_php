<?php

    $nota1 = 6.0;
    $nota2 = 5.0;
    $nota3 = 7.0;
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media == 7.0){
        echo("Voc� Passou de ano! Sua nota �: " . " " . $media);
    } else {
        echo("Reprovado! Sua nota foi: " . " " . $media);
    }

?>