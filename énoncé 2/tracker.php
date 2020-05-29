<?php

// $name= "omayma";
// $weightKg = 45;
// $heightCm = 160;

// $heightM = $heightCm/100;
// $heightCarre = $heightM * $heightM;

// $IMC = $weightKg/$heightCarre;

// echo "Bonjour $name , votre IMC est $IMC";

function IMC($name, $weightKg, $heightCm){
    $heightM = $heightCm/100;
    $heightCarre = $heightM * $heightM;
    $IMC = $weightKg/$heightCarre;
    $message = "Bonjour $name , votre IMC est $IMC";
    return $message;

}
$message = IMC("Omayma",45,160);

echo $message;

?>

