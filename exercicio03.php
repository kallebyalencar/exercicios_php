<?php

//  for ($i = 1; $i <= 10; $i++){
//     echo "$i" . "</br>"; 
// }

    // $frutas = [
    //     'Maça',
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
            "nome" => "João",
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