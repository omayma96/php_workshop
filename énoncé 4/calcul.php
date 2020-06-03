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

// la somme des nombres

function sum(int...$nbr){
    echo array_sum($nbr);
}
$result = sum(0,5,20,10,'1',"1");
echo $result .'<br>';

//function qui dit si un nbr est entier ou pas ainsi si il est premier ou pas 

function test_nbr($nbr){

    if(is_int($nbr)){
         echo "c'est un entier". '<br>';
         if($nbr < 2 ){
             return false;
         }
         
         else if ($nbr > 2 && $nbr % 2 === 0){
              return false;
         }
        
         else {
              return true;
         }
        
    }
        else
      echo 'C\'est pas un entier'. '<br>';
    
}
$result = test_nbr(17);
if($result){
    echo "c'est un nombre premier" .'<br>';

}else {
    echo 'ce n\'est pas un nombre premier' .'<br>';
}
?>

