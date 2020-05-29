<?php

$name= "omayma";
$weightKg = 45;
$heightCm = 160;

$heightM = $heightCm/100;
$heightCarre = $heightM * $heightM;

$IMC = $weightKg/$heightCarre;

echo "Bonjour $name , votre IMC est $IMC";

?>

