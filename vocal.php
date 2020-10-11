<?php
$vocal=array('a','e','i','o','u');
    $texto="Eddin Fernando Nij López 200713250";
    $convertirMinuscula=strtolower($texto);//convertir en minusculas
    $vocalTexto=array();//array en limpio
    $textoArreglo=str_split($convertirMinuscula); //Convierte un string en un array   
    $contadorVocales=0;
    foreach ($vocal as $i => $value) {       
        foreach ($textoArreglo as $j => $value) {
            if ($vocal[$i]==$textoArreglo[$j]) {                
               $vocalTexto[$contadorVocales]=$textoArreglo[$j];//lleno el array nuevo con las vocales del texto
               $contadorVocales++;
            }
        }
    }
    $conteo= array_count_values($vocalTexto);//cuenta cuantas veces se repite un elemento en un array
//     $array = array(1, "hello", 1, "world", "hello"); ejemplo de cómo funciona
//     print_r(array_count_values($array));
//     Array
// (
//     [1] => 2
//     [hello] => 2
//     [world] => 1
// )
    $valor=max($conteo);//me devuelve el valor maximo de las vocales del arreglo de vocales
    foreach ($vocal as $i => $value) {       
        if ($valor==$conteo[$vocal[$i]]) {            
            echo 'La vocal que mas se repite es: '.$vocal[$i]."<br>";             
        }        
    }
    
    //ignora las vocales con tilde

    
