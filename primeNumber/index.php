<?php

/*
 * Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
*/

function isPrimeNumber($number){
    if (is_numeric($number)) {
        for ($i=2; $i < $number; $i++) { 
            if ($number % $i == 0)
                echo $i."\n";
        }
    }
}

echo isPrimeNumber(100);