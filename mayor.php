<?php
// Eddin Nij 200713250
$numeros=array(7,2,5);

foreach ($numeros as $i => $value) {
    foreach ($numeros as $j => $value) {        
        if ($numeros[$i]>$numeros[$j]) {
            $aux=$numeros[$i];//7
            $numeros[$i]=$numeros[$j] ;//i=2
            $numeros[$j]=$aux;//j=7           
        }   
    }    
}
echo $numeros[0]. " es el número mayor <br>";
echo $numeros[2]. " es el número menor <br>";
echo $numeros[1]. " es el número medio <br>";
?>