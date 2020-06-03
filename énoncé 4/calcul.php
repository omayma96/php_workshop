<?php

function fact(int $nbr){

    $fact=1;
    while($nbr>0){
        $fact = $fact * $nbr;
        $nbr--;
    }
    echo "le factoriel est : $fact";
}fact(3);

?>