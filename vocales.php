<?php
$vocales=array('a','e','i','o','e','u','e','e');
$vocal=array('a','e','i','o','u');
    $texto="Eddin Fernando Nij";
    $textoArreglo=str_split($texto);
    $convertirMinuscula=strtolower($texto);
    $longitud=strlen($texto);

    //print_r( array_count_values($array));
    //$conteo= array_count_values($vocales);
    $conteo= array_count_values($vocales);
    $valor=max($conteo);


    //print_r($valor);
    //print_r($conteo);
    //echo $conteo['e'];
    //echo $valor;
    foreach ($vocal as $i => $value) {       
        if ($valor==$conteo[$vocal[$i]]) {            
            echo 'La letra mas repetida es: '.$vocal[$i];             
        }        
    }
    
    //echo $textoArreglo[0];
    