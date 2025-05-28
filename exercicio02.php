<?php

    $status = "aprovado";
    $status_ingles = null;

    switch ($status) {
        case 'aprovado':
            $status_ingles = "Apple";
            break;

        case 'cancelado';
            $status_ingles = "White";
            break;
        
        default:
            $status_ingles = "The end";
            break;
    }

    echo $status_ingles;

?>