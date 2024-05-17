<?php

$imena = ["Toma", "Petar", "Vlada"];

// Napisati petlju koja ce pretvoriti imena u mala slova

// & - da se taj element u arrayu moze promjeniti
foreach($imena as &$ime){
   $ime = strtolower($ime);
}
var_dump($imena);