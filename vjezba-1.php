<?php

// 1. Koristeci assoc array uradi foreach koji ce ispisati vrstu automobila

// Auto mladji od 5 godina, "Nov auto"
// Auto stariji od 5 , mladji od 11, "Noviji auto"
// Stariji od 10, mladji od 20, "Star auto"
// Preko 20 godina "Oldtimer"
// Ispisati recenicu npr: "Yugo 45 je oldtimer";

$automobili = [
    "Zastava" => [
        "model" => "Yugo 45",
        "godiste" => 1995
    ],
    "Renault" => [
        "model" => "Megane RS",
        "godiste" => 2014
    ],
    "Toyota" => [
        "model" => "Rav4",
        "godiste" => 2021
    ],
];

$ovaGodina = date("Y");
foreach($automobili as $auto => $specifikacija){
    $model = $specifikacija["model"];
    $godiste = $specifikacija["godiste"];
    $provjeraStanja = $ovaGodina - $godiste; 
    
    if($provjeraStanja <= 5){
        
        echo "$auto $model je nov auto";
        echo "<br>";

    }else if($provjeraStanja > 5 && $provjeraStanja < 11){
        echo "$auto $model je noviji auto";
        echo "<br>";

    }else {
        echo "$auto $model je oldtimer";
        echo "<br>";

    }
   

    
}

