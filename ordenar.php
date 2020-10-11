<?php
//Eddin Fernando Nij -- 200713250
$numeros=array(7,2,5,1,3,4,6,8,9,40,11,78,13,15,16,17,18,20,19);

foreach ($numeros as $i => $value) {
    foreach ($numeros as $j => $value) {        
        if ($numeros[$i]>$numeros[$j]) {
            $aux=$numeros[$i];//7
            $numeros[$i]=$numeros[$j] ;//i=2
            $numeros[$j]=$aux;//j=7           
        }   
    }    
}
echo "Orden Ascendente";
for ($i=20; $i >=0 ; $i--) { 
    echo $numeros[$i]."<br>";
}
echo "Orden descendente <br>";
foreach ($numeros as $i => $value) {
    echo $numeros[$i]."<br>";
}    
?>