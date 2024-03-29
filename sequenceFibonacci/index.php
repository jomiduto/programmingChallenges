<?php

/*
 * Escribe un programa que imprima los 50 primeros números de la sucesión
 * de Fibonacci empezando en 0.
 * - La serie Fibonacci se compone por una sucesión de números en
 *   la que el siguiente siempre es la suma de los dos anteriores.
 *   0, 1, 1, 2, 3, 5, 8, 13...
*/

function sequenceFibonacci(){
    $varI = 0;
    $varF = 1;
    
    echo "$varI \n";
    
    for ($i=0; $i < 49; $i++) { 
        $temp = $varI;
    
        $varI = $varF;
    
        $varF = $temp + $varI;
    
        echo "$varI \n";
    }
}

echo sequenceFibonacci();