<?php

//  for ($i = 1; $i <= 10; $i++){
//     echo "$i" . "</br>"; 
// }

    // $frutas = [
    //     'Ma�a',
    //     'Uva',
    //     'Pera'
    // ];

    // foreach($frutas as $fruta){

    //     echo $fruta;
    //     echo "</br>";
    // }

    $usuarios = [
        [
            "nome" => "Kalleby"
        ],

        [
            "nome" => "Jo�o",
            "compras" => "Fez compras"
        ]
    ];

    foreach($usuarios as $key => $value){

        echo $value["nome"] . "</br>";
        if(isset($value["compras"])){
            echo $value["compras"];
        }
    }
?>