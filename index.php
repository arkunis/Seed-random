<?php 

$mots = [
"garage", "runway", "again", "asthma", "range",
"pool", "warrior", "doll", "jungle", "story",
"satoshi", "phone", "shift", "border", "coffee",
"year", "mistake", "tourist", "myself", "despair",
"shock", "collect", "artist", "census"
]; 


$nombre = 24;

$result=1;

for($i=1; $i<=$nombre;$i++){
$result = $i*$result;
}


for($i=0; $i <= $result; $i++ ){
    shuffle($mots);
    $motsN =  implode(" ", $mots);
    
                //On écrit un premier texte dans notre fichier  
            file_put_contents('seed.txt', $motsN);
    
                for($j=0; $j <= $result; $j++){
                    shuffle($mots);
                    $motsN =  implode(" ", $mots);
                    file_put_contents('seed.txt', "\n\r{$motsN}", FILE_APPEND);
                }
    
    
    }
?>