<?php

// Le calcul du factoriel 
function fact(int $nbr){

    $fact=1;
    while($nbr>0){
        $fact = $fact * $nbr;
        $nbr--;
    }
    echo "le factoriel est : $fact <br>";
}fact(3);


// Le calcul du factoriel avec la récursivité 
function fct(int $num){

    if($num === 0)
        return 1;
    else
        return $num*(fct($num-1));
}
$result = fct(3);
echo $result.'<br>'; 
?>