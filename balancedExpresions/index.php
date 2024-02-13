<?php

/*
 * Crea una función que reciba dos cadenas como parámetro (str1, str2)
 * e imprima otras dos cadenas como salida (out1, out2).
 * - out1 contendrá todos los caracteres presentes en la str1 pero NO
 *   estén presentes en str2.
 * - out2 contendrá todos los caracteres presentes en la str2 pero NO
 *   estén presentes en str1.
*/

function balancedExpressions($str1, $str2) {
    $str1 = strtolower($str1);
    $str2 = strtolower($str2);

    $str1 = str_split($str1);
    $str2 = str_split($str2);
    
    $out1 = array_diff($str1, $str2);
    $out2 = array_diff($str2, $str1);
    
    echo $out1 = implode($out1);
    echo "<br>";
    echo $out2 = implode($out2);
}

echo balancedExpressions("Jose Miguel", "Helena Torres");