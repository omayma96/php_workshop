<?php 
       $realisateurs = [
            'Sam Mendes'=> ['1917','Skyfall','Away We Go','Spectre','Revolutionary Road'],
            'Ken Burns'=> ['The Dust Bowl','The War','Mark Twain','Jazz','The Congress'],
            'Steven Spielberg'=> ['West Side Story','Ready Player One','The Post','War Horse','Munich'],
            'Quentin Tarantino'=> ['Django Unchained','Jackie Brown','Inglourious Basterds',' Les Experts',' Urgences'],
            'David Fincher'=> ['Mank','The Game','Zodiac','The Social Network','Fight Club']
            ]; 

function info(int $nom=5, int $title=5){
         global $realisateurs;
 
        $nbr_r = array_rand($realisateurs, $nom);
        $nbr_f = array_rand($nbr_r, $title);
        foreach($nbr_r as $key => $value){
            echo "<b>les films de $value  :</b> <br>";

            foreach($nbr_f as $valuee){
            echo $realisateurs[$value][$valuee] .'<br>';
        }
    
        echo '<br>';
        }
        
}info(4,3);