<?php

/*
 * Crea un programa que invierta el orden de una cadena de texto
 * sin usar funciones propias del lenguaje que lo hagan de forma automática.
 * - Si le pasamos "Hola mundo" nos retornaría "odnum aloH"
*/

// Con funciones de PHP
/*function reversingWords($word) {
    if(is_string($word)){
        $word = strrev($word);
        echo $word;
    }
}

echo reversingWords("Jose Miguel");*/

// Sin funciones de PHP

function reversingWords($word) {
    if (is_string($word)) {
        $word = str_split($word);
        $size = sizeof($word);
        for ($i=$size-1; $i >= 0; $i--) { 
            print_r($word[$i]);
        }
    }
}

echo reversingWords("Jose Miguel");