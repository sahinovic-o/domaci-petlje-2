<?php

$automobili = [
    // $marka => $model
    "audi" => "a4",
    "bmw" => "x1"
];


foreach($automobili as $marka => $model){
    // echo "Marka automobila je $marka, a model je $model";
}

$osobe = [
    "Omar" => [
        "puno_ime" => "Omar",
        "prezime" => "Sahinovic",
        "godine" => 27
    ],
    "Dijamant" => [
        "puno_ime" => "Edin",
        "prezime" => "Dzeko",
        "godine" => 39
    ],
];

echo $osobe["Omar"]["puno_ime"];
echo $osobe["Omar"]["prezime"];

echo "<br>";

foreach($osobe as $ime => $osoba){
    $godine = $osoba["godine"];
    echo "Osoba $ime ima $godine godina";
}